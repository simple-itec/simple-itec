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
                            <p>The content of the home page</p>
						</div>
						<aside class="sidebar col-md-3"><?php get_sidebar('home'); ?></aside>
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

