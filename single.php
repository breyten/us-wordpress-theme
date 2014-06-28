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
<?php get_sidebar('left'); ?> 
<section id="main" class="no-header">
  <div class="container white">
    <div class="row">
      <div id="nieuws" class="col-sm-8 col-md-9">
				<?php 
				while (have_posts()) {
					the_post();

					get_template_part('content', get_post_format());

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
      <div id="sidebar" class="col-sm-4 col-md-3">
        <h2>
          Recent nieuws
        </h2>
        <ul class="dotted">
        <?php
        // Get the last 10 posts in the special_cat category.
        query_posts('post_type=post&posts_per_page=5');
        while (have_posts()) {
            the_post();
            get_template_part('content', 'recent');
        }
        ?>
        </ul>
      </div>
    </div>
  </div>
</section>            
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 