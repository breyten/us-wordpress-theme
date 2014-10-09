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
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1218.3142648487055!2d4.9101274!3d52.3590223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc87ca30a72d9e3d!2sAmstel+Campus!5e0!3m2!1snl!2snl!4v1402665672962" frameborder="0" style="border:0"></iframe>
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
                      <tbody><tr>
                        <td>
                          Adres
                        </td>
                      </tr>
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
