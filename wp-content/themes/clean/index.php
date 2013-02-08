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
				<h1>header</h1>
			</div>
		</div>
	</body>
</html>