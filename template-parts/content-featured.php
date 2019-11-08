<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
    
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ) ?></a>
    </div>

    <a href="<?php the_permalink(); ?>"> <h2><?php the_title(); ?></h2></a>

    <div class="meta-info">
        <p>
            by <?php the_author_link(); ?>
            Categories: <?php the_category( ' ' ); ?>
            <?php the_tags( 'Tags: ', ', ', ''); ?>
        </p>
        <p><?php the_date(); ?></p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>