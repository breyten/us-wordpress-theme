<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <ul class="breadcrumb">
      <li>
        <a href="/"><span class="glyphicon glyphicon-home"></span></a>
      </li>

      <?php if($post->post_parent) {
      	$parent_link = get_permalink($post->post_parent);
      	$parent_title = get_the_title($post->post_parent);
      ?>
      <li><a href="<?php echo $parent_link; ?>"><?php echo $parent_title; ?></a></li>
      <?php  }
      ?>      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </li>
    </ul>
  	<?php the_content(); ?>
</div>