<?php get_header(); ?>

		<!-- Main Area -->
		<div id="content" class="group">
			
			<div id="main" class="group">
				<div id="blog" class="left-col">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post">
					   <h2><?php the_title(); ?></h2>
					   <?php the_content('Read More...'); ?>
					</div>
					
					<?php endwhile; else: ?>
					   <p><?php _e('No posts were found. Sorry!'); ?></p>
					   <?php endif; ?>
				</div>
				<aside class="right-col">
					<div class="widget">
						<h3>ABOUT US</h3>
						<p>Ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						
						<p>Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
						
						<p><a href="#">MORE ABOUT US...</a></p>
					</div>
				</aside>
			</div>

		</div>	<!-- End Main Area -->
	<!--end container-->
</div>


</div>

<?php get_footer(); ?>