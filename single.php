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

// check if the post has a Post Thumbnail assigned to it.
if ((get_post_type() == 'team') && has_post_thumbnail() ) {
?> 
<section id="header">
  	<?php the_post_thumbnail('large'); ?>
</section>
<?php } ?>
<?php get_sidebar('left'); ?>

<!-- Needs check if header image exist, else: .no-header -->
<section id="main" class="no-header">
  <div class="container white">
    <div class="row">
      <?php
    if (get_post_type() == 'team') {
		  $table_width = 8;           
    } else {
		  $table_width = 9;
    }      
      ?>
      <div id="nieuws" class="col-sm-8 col-md-<?php echo $table_width; ?>">
				<?php 
				while (have_posts()) {
					the_post();

          if (get_post_type() == 'team') {
					  get_template_part('content', 'team');            
          } else {
					  get_template_part('content', get_post_format());
          }

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
      <!-- sidebar thingie -->
      <?php
      if (get_post_type() == 'team') {
			  get_template_part('content-sidebar', 'team');            
      } else {
			  get_template_part('content-sidebar', 'recent');
      }
      ?>
    </div>
  </div>
</section>            
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 