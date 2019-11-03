<?php

/*
 * Template Name: General Template
 */

?>

<?php get_header(); ?>
<!-- img-fluid: image responsive size / get the header images -->
    <div class="container">
        <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
    </div>
	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
                    <!-- Loop to display specific posts -->
                    <?php
                    // checks if there are any posts that match the query
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_content(); ?></p>
                            </article>
                    <?php
                        }
                    } else {
                        echo "There's nothing yet to be displayed!";
                    }
                    ?>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>

