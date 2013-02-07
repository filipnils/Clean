<!doctype html>
<html>
	<head>
		<title><?php blog_info('name'); ?> | <?php wp_title(); ?></title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="<?php blog_info('stylesheet_url'); ?>">
		<link rel="pingback" href="<?php blog_info('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<div class="header">
				
			</div>
		</div>
	</body>
</html>