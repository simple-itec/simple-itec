<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="thumbnail">
        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ) ?>
    </div>
    <div class="meta-info">
        <p>
            by <?php the_author_link(); ?>
            Categories: <?php the_category( ' ' ); ?>
            <?php the_tags( 'Tags: ', ', ', ''); ?>
        </p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article>