<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <ul class="breadcrumb">
      <li>
        <a href="/"><span class="glyphicon glyphicon-home"></span></a>
      </li>
      <li>
        <a href="/nieuws/">Nieuws</a>
      </li>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    </ul>
		<p><i><?php the_time( get_option( 'date_format' ) ); ?></i></p>
  	<?php the_content(); ?>
</div>
