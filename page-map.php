<?php
/*
Template Name: Pagina met kaart
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<section id="header">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.650620260238!2d4.907844915695788!3d52.358621679783994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6099c0bb3010f%3A0x1eeb60e6d8124c6d!2sAmstelcampus+Sport+%26+Fitness!5e0!3m2!1snl!2snl!4v1511178181643" frameborder="0" style="border:0"></iframe>
    </section>
<?php get_sidebar('left'); ?>
<section id="main">
  <div class="container white">
    <div class="row">
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
      <div id="sidebar" class="col-sm-4 col-md-3">
        <h1>
          Adres
        </h1>
        <table>
                      <tbody>
                      <tr>
                        <td>
                          Universitaire Sportvereniging
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Afdeling Volleybal
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Amstelcampus Sport en Fitness
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Tweede Boerhaavestraat 10
                        </td>
                      </tr>
                      <tr>
                        <td>
                          1091 AN Amsterdam
                        </td>
                      </tr>
                      <tr>
                        <td>
                          &nbsp;
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Parkeren bij de hal kost 4 euro per uur. Bezoekers kunnen kijken op <a href="http://www.parkeren-amsterdam.com" target="_blank">Parkeren Amsterdam</a> voor goedkopere parkeeropties.
                        </td>
                      </tr>

                    </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php //get_sidebar('right'); ?>
<?php get_footer(); ?>
