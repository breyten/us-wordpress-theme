<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <ul class="breadcrumb">
      <li>
        <a href="/"><span class="glyphicon glyphicon-home"></span></a>
      </li>
      <li>
        <a href="/nieuws/index.html">Nieuws</a>
      </li>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    </ul>
  	<?php the_excerpt(); ?>
  	<div class="slider">
  	<?php
  	$media = get_attached_media( 'image' );
  	foreach($media as $image) {
  	  echo '<div>'. wp_get_attachment_image( $image->ID, 'medium') .'</div>';
  	}
  	?>
  	</div>
</div>
