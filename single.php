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
          <li>
            <a href="/nieuws/2014/05/24/Help-de-sponsorcommissie.html">Help de sponsorcommissie</a>
          </li>
          <li>
            <a href="/nieuws/2014/04/04/Qoppeltjestoernooi.html">Save the date - US Qoppeltjestoernooi 2014</a>
          </li>
          <li>
            <a href="/nieuws/2014/03/23/Eindfeest.html">Spetterend eindfeest - "Anders, namelijk"</a>
          </li>
          <li>
            <a href="/nieuws/2014/03/02/US-Grastoernooi.html">US Grastoernooi 2014</a>
          </li>
          <li>
            <a href="/nieuws/2014/01/01/US-Bedrijventoernooi.html">US Gras Bedrijventoernooi</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>            
<?php //get_sidebar('right'); ?> 
<?php get_footer(); ?> 