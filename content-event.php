<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h3>
  <a href="<?php the_permalink(); ?>">
    <?php
      //the_post_thumbnail('sponsor');
      the_title();
    ?>
  </a>
</h3>
<p><?php eo_get_the_start( 'jS F Y' ); ?></p>
</div>
