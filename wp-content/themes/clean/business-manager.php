<?php 
	
	add_action('init', 'business_manager_register');

	function business_manager_register() {
		//Arguments to create post type
		$args = array(
			'label' => __('Business Manager'),
			'single_label' => __('Business'),
			'public' => true,
			'show_ui' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
	        'has_archive' => true,
	        'supports' => array('title', 'editor', 'thumbnail'),
	        'rewrite' => array('slug' => 'businesses', 'with_front' => false),
			);

		//Register type and custom taxonomy for type.
		register_post_type( 'businesses' , $args );
	}

	register_taxonomy("business-type", array("businesses"),
        array("hierarchical" => true, "label" => "Business
        Types", "singular_label" => "Business Type", "rewrite"
        => true, "slug" => 'business-type'));

?>