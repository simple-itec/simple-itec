<?php get_header(); ?>
<!-- img-fluid: image responsive size / get the header images -->
	<div class="container">
		<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Responsive image">
	</div>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slider</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">
						Services
					</div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-9">
							<!-- Loop to display specific posts -->
							<?php
							// checks if there are any posts that match the query
							if (have_posts()) {
								while (have_posts()) {
									the_post();
									get_template_part('template-parts/content');
								}
							} else {
								echo "There's nothing yet to be displayed!";
							}
							?>
						</div>
						<aside class="sidebar col-md-3">Sidebar</aside>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">
						Map
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>

