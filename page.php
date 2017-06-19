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
<?php
// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) { ?>
<section id="main">
<?php } else { ?>
<section id="main" class="no-header">
<?php } ?>
  <div class="container white">
    <div class="row">
      <div id="sidebar" class="col-sm-4 col-md-3">
        <a class="heading" href="#">Menu <span class="caret"></span></a>
        <?php
          if($post->post_parent)
          $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
          else
          $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
          if ($children) { ?>
          <ul class="nav nav-pills collapsable">
          <?php echo str_ireplace(' current_page_item"><a ', '"><a class="active" ', $children); ?>
          </ul>
          <?php } ?>
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
        <?php get_sidebar('right'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
