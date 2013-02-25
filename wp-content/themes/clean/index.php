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
				
				<h1><img src="<?php print IMAGES; ?>/logo.png" alt="Clean"></h1>

				<div class="searchbar">
					<form name="search" method="get" action="">
						<input type="text" name="search" value="">
						<input type="submit" name="submit" value="Search">
					</form>
				</div>

				<div class="nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Directory</a></li>
						<li><a href="#">Blog</a></li>
					</ul>
				</div>

			</div> <!-- End header -->

		</div>
	</body>
</html>