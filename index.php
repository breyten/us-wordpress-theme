<?php
/**
 * The main template file
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
	<?php echo wp_get_attachment_image( 16, "large" ); ?>
</section>

<section id="main">
      <div class="container white">
        <div class="row">
          <!--Linker kolom, 2/3-->
          <div class="col-md-8 col-sm-8">
            <h1>
              Welkom bij US Volleybal
            </h1>
            <p>
				<?php echo get_bloginfo ( 'description' ); ?>
            </p>
            <a class="btn primary" href="/vereniging/sponsor-worden/">Sponsor worden</a><a class="btn secundary" href="/contact/">Lid worden</a>
          </div>
          <!--Rechter kolom, 1/3-->
          <div class="col-md-4 col-sm-4">
            <h1>
              Handige links
            </h1>
            <ul>
              <li>
                <a href="/vereniging/sponsor-worden/">Sponsor worden</a>
              </li>
              <li>
                <a href="/contact/">Lid worden</a>
              </li>
              <li>
                <a href="/teams/trainingschema/">Trainingschema</a>
              </li>
              <li>
                <a href="/competitie/vlagdienst/">Vlagschema en zaaldiensten</a>
              </li>
              <li>
                <a href="/contact/">Neem contact op</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
</section>

<?php get_sidebar('left'); ?>
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?>
						<?php
						// start the loop
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while

						bootstrapBasicPagination();
						?>
						<?php } else { ?>
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?>
					</main>
				</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
