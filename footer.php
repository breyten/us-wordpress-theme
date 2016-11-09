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
        <!--
        <li>
          <a href="#">sitemap</a>
      </li> -->
        <li>
          <a href="/contact/">mail de webmaster</a>
        </li>
      </ul>
    </div>
  </footer>

  <!--wordpress footer-->
  <?php wp_footer(); ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-87086430-1', 'auto');
    ga('send', 'pageview');

  </script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
</body>
<html>
