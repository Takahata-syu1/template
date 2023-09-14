<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<meta name="format-detection" content="email=no,telephone=no,address=no" />
	<title></title>

	<!-- style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<h1 class="header__logo"></h1>

		<nav class="header__nav-wrap">
			<?php get_template_part('template-parts/nav'); ?>
		</nav>
		<nav class="header__burge-nav-warap">
			<?php get_template_part('template-parts/sp-nav'); ?>
		</nav>
	</header>
