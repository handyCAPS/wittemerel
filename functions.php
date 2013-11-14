<?php

define('THEMEPATH', get_stylesheet_directory_uri()); 

// Register Navigation Menus
function wime_navigation_menus() {

	$locations = array(
		'header_menu' => __( 'Header Menu', 'text_domain' ),
		'footer_menu' => __( 'Footer Menu', 'text_domain' ),
		'mobile_footer' => __( 'Footer Menu on mobile devices', 'text_domain' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'wime_navigation_menus' );

// Register Style
function wime_styles() {

	wp_register_style( 'foundation', THEMEPATH . '/stylesheets/app.css', false, false, 'all' );
	wp_enqueue_style('foundation');
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'wime_styles' );

// Register Sidebar
function wime_sidebar()  {

	$args = array(
		'id'            => 'sidebar_wime',
		'name'          => __( 'Sidebar', 'text_domain' ),
		'description'   => __( 'De Sidebar', 'text_domain' ),
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'wime_sidebar' );