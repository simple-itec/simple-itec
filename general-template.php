<?php

/*
 * Template Name: General Template
 */

?>

<?php get_header(); ?>
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

