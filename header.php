<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Simple Itec</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- body_class(): ajoute la classe => class="home blog logged-in admin-bar no-customize-support" -->
	<header>
		<section class="top-bar">
			<div class="social-media-icons">Social Icons</div>
			<div class="search">Search</div>
		</section>
		<section class="menu-area">
			<section class="logo">Logo</section>
			<nav class="main-menu">Menu</nav>
		</section>
	</header>