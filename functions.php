<?php

/*

00. Help Desk
_______________________________

This section helps you navigate the document.
AA. Global Styles
01. Bootstrap 
02. Stylesheet (via styles.css)
03. 


*/

function load_global_styles() 
{

	// 1. Stylesheet Support

	wp_register_style('stylesheet', get_template_directory_uri() . '/sass/style.css', array(), false, 'all');
	wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_global_styles');


function include_jquery()
{
	// jQuery Support
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
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

// Adds Menu Support
add_theme_support('menus');

// Adds Post Format Support
add_theme_support('post-formats', array('standard', 'aside', 'quote', 'link', 'image', 'video', 'gallery', 'audio'));

function the_post_format() {
	   if ( has_post_format( 'aside' )) {
	  // Displays the Aside Post Format
	   	get_template_part('includes/format','aside');
	}  else if (has_post_format('quote')) {
	   // Displays the Quote Post Format
		get_template_part('includes/format','quote');
	}  else if (has_post_format('link')) {
	   // Displays the Link Post Format
		get_template_part('includes/format','link');
	}  else if (has_post_format('image')) {
	   // Displays the Image Post Format
		get_template_part('includes/format','image');
	}  else if (has_post_format('video')) {
	   // Displays the Gallery Post Format
		get_template_part('includes/format','video');
	}  else if (has_post_format('gallery')) {
	   // Displays the Gallery Post Format
		get_template_part('includes/format','gallery');
	}  else if (has_post_format('audio')) {
	   // Displays the Audio Post Format
		get_template_part('includes/format','audio');
	}  else if (has_post_format('standard')) {
	   // Displays the Standard Post Format
		get_template_part('includes/format','standard');
	}
};

/* Custom Post Support - Backend Extension */

function custom_post_type() {

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


// Featured Image / Thumbail Support

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, false);
add_image_size('small', 350, 350, false);
add_image_size('medium', 750, 750, false);
add_image_size('large', 1700, 1700, false);


// Show Post Category Parent or First Tag

function the_first_subcategory() {

       $cat_name = 'category';
       $categories = get_the_terms( $post->ID, $cat_name );
       
       foreach($categories as $category) {
         if($category->parent){
            echo $category->name;
         }
       }  
};



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

/* Back End Support */

function remove_footer_admin () {
 
echo 'Designed and developed by Eric Slyfield';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

?>
