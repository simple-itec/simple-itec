<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Itec</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- body_class(): ajoute la classe => class="home blog logged-in admin-bar no-customize-support" -->
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">Social Icons</div>
					<div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-right">Search</div>
				</div>
			</div>
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="align">
					<div class="row">
						<section class="logo col-md-2 col-sm-12 col-12 text-center">Logo Simple ITec</section>
						<nav class="main-menu col-md-10 text-right">
							<!-- Request the Main Menu -->
							<?php wp_nav_menu(); ?>
						</nav>
					</div>		
				</div>
			</div>
		</section>
	</header>