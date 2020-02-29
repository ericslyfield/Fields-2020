<?php 

function load_global_styles() 
{
	// Bootstrap Support
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	// Stylesheet Support
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_global_styles');


function include_jquery()
{
	// jQuery Support
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);
}
 add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{
	// Custom Javascript Support
	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

/* Theme Support */

// Menu Support
add_theme_support('menus');

// Post Format Support
add_theme_support('post-formats', array('gallery', 'link', 'image', 'quote', 'video', 'audio'));

/* Custom Post Support */
function custom_post_type()
{

$args = array(

	'labels' => array(
				'name' => 'Artworks',
				'singular_name' => 'Artwork',
	),
	'public' => true,
	'has_archive' => true,
	'menu_icon' => 'dashicons-admin-customizer',
);
register_post_type('artwork', $args);
}

add_action('init', 'custom_post_type');

// Featured Image Support
add_theme_support('post-thumbnails');
set_post_thumbnail_size('thumb', 250, auto, false);
add_image_size('small', 350, auto, false);
add_image_size('medium', 750, auto, false);
add_image_size('large', 1700, auto, false);


// Custom Taxonomy Support

function custom_taxonomy(){
	$args = array(
		'labels' => array(
			'name' => 'Mediums',
			'singular_name' => 'Medium',
		),

		'public' => true,
		'hierarchical' => false,
			);
register_taxonomy('mediums', array('artwork'), $args);
}
add_action('init', 'custom_taxonomy');


// Navigation Menus
register_nav_menus(
	array(
		'header-menu' =>__('Header Menu', 'theme'),
		'mobile-menu' =>__('Mobile Menu', 'theme'),
		'footer-menu' =>__('Footer Menu', 'theme'),
	)
);
