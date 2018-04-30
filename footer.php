<?php
/**
 * The theme footer
 *
 * @package bootstrap-basic
 */
?>

<!--Sponsors-->
<section id="sponsors">
      <div class="container">
        <div class="row white">
          <div class="col-md-12">
            <h1>
              Sponsors
            </h1>
            <div id="carousel">
                <?php
                // Get the last 10 posts in the special_cat category.
                query_posts('post_type=sponsor&posts_per_page=100');
                while (have_posts()) {
                    the_post();
                    get_template_part('content', 'sponsor');
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <!--Footer--><footer>
    <div class="container">
      <ul>
        <li>
          <a href="#">© 2005-2014 US volleybal</a>
        </li>
        <li>
          <a href="/disclaimer/">disclaimer</a>
        </li>
        <li>
          <a href="/privacy/">Privacy</a>
        </li>
        <li>
          <a href="/contact/">mail de webmaster</a>
        </li>
        <li>
          <a href="https://www.facebook.com/USvolleybal/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="https://twitter.com/USVolleybal"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        </li>
        <li>
          <a href="https://www.instagram.com/usvolleybal/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
  </footer>

  <!--wordpress footer-->
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
</body>
<html>
