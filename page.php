<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
<section id="header">
  <?php
  // check if the post has a Post Thumbnail assigned to it.
  if ( has_post_thumbnail() ) {
  	the_post_thumbnail('large');
  } ?>
</section>
<section id="main">
  <div class="container white">
    <div class="row">
      <div id="sidebar" class="col-sm-4 col-md-3">
        <?php get_sidebar('left'); ?> 
      </div>
      <div id="nieuws" class="col-sm-8 col-md-9">
				<?php 
				while (have_posts()) {
					the_post();

					get_template_part('content', 'page');

					echo "\n\n";
					
					bootstrapBasicPagination();

					echo "\n\n";
					
					// If comments are open or we have at least one comment, load up the comment template
					if (comments_open() || '0' != get_comments_number()) {
						comments_template();
					}

					echo "\n\n";

				} //endwhile;
				?>         
      </div>
    </div>
  </div>
</section>            
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?>