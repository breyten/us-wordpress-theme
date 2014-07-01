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
          wp_get_archives(array(
            'type' => 'postbypost',
            'format' => 'custom',
            'before' => '<tr><td><h1>',
            'after' => '</h1></td></tr>',
          ));
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