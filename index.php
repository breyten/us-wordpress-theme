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
	<?php
	  # TODO: figure out how to make configurable
		$fp_images = array(4414);
		$fp_id =  $fp_images[mt_rand(0, count($fp_images) - 1)];
		echo wp_get_attachment_image( $fp_id, "large" );
	?>
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
						<a class="btn primary" href="/inschrijven/">Lid worden</a>
            <a class="btn secundary" href="/vereniging/sponsor-worden/">Sponsor worden</a>
          </div>
          <!--Rechter kolom, 1/3-->
          <div class="col-md-4 col-sm-4">
			<?php get_sidebar('right'); ?>
          </div>
        </div>
				<div class="row">
					<div class="col-xs-12">
					<?php get_sidebar('left'); ?>
					</div>
				</div>
      </div>
</section>


<section id="news">
      <div class="container">
        <nav>
          <ul>
            <li>
              <a class="prev" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/news-prev.png" /></a>
            </li>
            <li>
              <a class="next" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/news-next.png" /></a>
            </li>
          </ul>
        </nav>
        <div id="panel">
						<?php if (have_posts()) { ?>
						<?php
						// start the loop
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', 'short');
						}// end while

						//bootstrapBasicPagination();
						?>
						<?php } else { ?>
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?>
		</div>
	</div>
</section>

<section id="agenda">
	<div class="container">
		<div class="row white">
			<div class="col-md-12">
				<div id="agenda-carousel">
					<h1>
						Agenda
					</h1>
						<?php
						$result = eventorganiser_list_events("showpastevents=false&posts_per_page=5", array(
							'template' => '<h3 style="min-height: 90px;"><a href="%event_url%">%event_title%</a></h3><p>%start{j M Y}{ G:i}%<br>%event_venue%',
							'class' => 'carousel'), 0);
						echo str_replace(
							array('<ul', '</ul>', '<li', '</li>'),
							array('<div', '</div>', '<div', '</div>'), $result);
						?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
