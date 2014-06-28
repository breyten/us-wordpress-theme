<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // check if the post has a Post Thumbnail assigned to it.
    if ( has_post_thumbnail() ) {
    	the_post_thumbnail();
    } ?>
    <a href="<?php the_permalink(); ?>">
        <div class="caption">
            <h1>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>
            <h2>
                <a href="<?php the_permalink(); ?>">Lees verder</a>
            </h2>
        </div>
    </a>
</article>
