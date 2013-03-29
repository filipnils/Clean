<!doctype html>
<html>
	<head>
		<title> <?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">

			<div class="header">
				<h1><a href="index.php"><img src="<?php print IMAGES; ?>/logo.png" alt="Clean"></a></h1>

				<?php get_search_form(); ?>

				<!-- nav -->
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
			</div>