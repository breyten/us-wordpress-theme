<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail() ) {
  ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('sponsor'); ?>
      </a>
  <?php } else { ?>
	  <?php the_content(); ?>
	<?php } ?>
</div>
