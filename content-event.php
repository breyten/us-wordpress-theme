<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>">
    <?php
      //the_post_thumbnail('sponsor');
      the_title();
    ?>
  </a>
</div>
