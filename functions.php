<?php 

	add_theme_support( 'post-thumbnails' ); 
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'new-menu' => __( 'New Menu' ),
		  'another-menu' => __( 'Another Menu' ),
		  'an-extra-menu' => __( 'An Extra Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
?>