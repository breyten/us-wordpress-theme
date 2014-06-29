<div id="sidebar" class="col-sm-4 col-md-3">
  <h2>
    Recent nieuws
  </h2>
  <ul class="dotted">
  <?php
  // Get the last 10 posts in the special_cat category.
  query_posts('post_type=post&posts_per_page=5');
  while (have_posts()) {
      the_post();
      get_template_part('content', 'recent');
  }
  ?>
  </ul>
</div>
