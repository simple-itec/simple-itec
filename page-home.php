<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slider</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<h1>Services</h1>
					<div class="row">
						<div class="col-sm-4">
							<div class="service-item">
								<?php
								if (is_active_sidebar('service-1')) {
									dynamic_sidebar('service-1');
								}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-item">
								<?php
								if (is_active_sidebar('service-2')) {
									dynamic_sidebar('service-2');
								}
								?>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="service-item">
								<?php
								if (is_active_sidebar('service-3')) {
									dynamic_sidebar('service-3');
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<div class="news col-md-9">
                            <div class="container">
								<div class="row">
									<?php
									// The Query
									$featured = new WP_Query( array( 'author_name' => 'simple-itec' ) ); 
									if ( $featured->have_posts() ) {
										while ( $featured->have_posts() ) {
											$featured->the_post();
										?>
										<div class="col-12">
											<?php get_template_part( 'template-parts/content', 'featured' ); ?>
 										</div>
										<?php
										}
									} else {
										echo 'No posts found.';
									}
									/* Restore original Post Data 
									 * NB: Because we are using new WP_Query we aren't stomping on the 
									 * original $wp_query and it does not need to be reset with
									 * wp_reset_query(). We just need to set the post data back up with
									 * wp_reset_postdata().
									 */
									wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
						<aside class="sidebar col-md-3 h-100"><?php get_sidebar('home'); ?></aside>
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

