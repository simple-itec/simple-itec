<article <?php post_class() ?>>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('thumbnail'); ?>
    <p>Posted in <?php echo get_the_date(); ?></p>
    <p>Categories: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>