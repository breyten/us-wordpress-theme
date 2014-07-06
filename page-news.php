<?php
/*
Template Name: Pagina met nieuws
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

					get_template_part('content', 'page');

          ?>
          <div id="articles">
          <table>
              <?php
              // Get the last 10 posts in the special_cat category.
              $news_query = new WP_Query('post_type=post&posts_per_page=10');
              while ($news_query->have_posts()) {
                  $news_query->the_post();
              ?>
              <tr>
                <td>
                  <h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  <p><?php the_excerpt(); ?></p>
                  <a href="<?php echo the_permalink(); ?>">Lees verder</a>
                </td>
              </tr>
              <?php
              }
              ?>
          </table>
          </div>
          <?php
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
      <?php
      get_template_part('content-sidebar', 'recent');
      ?>
    </div>
  </div>
</section>
<?php //get_sidebar('right'); ?>
<?php get_footer(); ?>
