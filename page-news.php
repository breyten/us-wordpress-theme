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

              $temp_query = $wp_query;

              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

              // Get the last 10 posts in the special_cat category.
              $wp_query = new WP_Query(array(
                  'post_type' => post,
                  'posts_per_page' => '10',
                  'paged' => $paged
              ));

              $wp_query->query_vars[ 'paged' ] > 1 ? $current = $wp_query->query_vars[ 'paged' ] : $current = 1;

              //set the "paginate_links" array to do what we would like it it. Check the codex for examples http://codex.wordpress.org/Function_Reference/paginate_links
              $pagination = array(
                'base' => @add_query_arg( 'paged', '%#%' ),
                //'format' => '',
                'showall' => false,
                'end_size' => 4,
                'mid_size' => 4,
                'total' => $wp_query->max_num_pages,
                'current' => $current,
                'type' => 'list',
                'prev_text' => '&larr;',
                'next_text' => '&rarr;'
              );

              //build the paging links
              if ( $wp_rewrite->using_permalinks() )
                $pagination[ 'base' ] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

              //more paging links
              if ( !empty( $wp_query->query_vars[ 's' ] ) )
                $pagination[ 'add_args' ] = array( 's' => get_query_var( 's' ) );

              while ($wp_query->have_posts()) {
                  $wp_query->the_post();
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
              echo str_replace(
                  array(
                      "<ul class='page-numbers'>",
                      '<li><a class="prev',
                      '<li><a class="next'
                  ),
                  array(
                      '<ul class="pager">',
                      '<li class="previous"><a class="prev',
                      '<li class="next"><a class="next'
                  ),
                  paginate_links($pagination)
              );

              $wp_query = $temp_query;

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
