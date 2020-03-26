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

// Adds Menu Support
add_theme_support('menus');

// Adds Post Format Support
add_theme_support('post-formats', array('aside', 'quote', 'link', 'image', 'video', 'gallery', 'audio'));

function the_post_format(){
	   if ( has_post_format( 'aside' )) {
	  // code to display the aside format post here
	   	get_template_part('includes/format','aside');
	}  else if (has_post_format('quote')) {
	   // stuff to display the quote format post here
		get_template_part('includes/format','quote');
	}  else if (has_post_format('link')) {
	   // stuff to display the link format post here
		get_template_part('includes/format','link');
	}  else if (has_post_format('image')) {
	   // stuff to display the image format post here
		get_template_part('includes/format','image');
	}  else if (has_post_format('video')) {
	   // stuff to display the video format post here
		get_template_part('includes/format','video');
	}  else if (has_post_format('gallery')) {
	   // stuff to display the gallery format post here
		get_template_part('includes/format','gallery');
	}  else if (has_post_format('audio')) {
	   // stuff to display the audio format post here
		get_template_part('includes/format','audio');
	}  else {
	   // code to display the normal format post here
		get_template_part('includes/format','archive');
	}
};

/* Custom Post Support - Backend Extension */

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


// Featured Image / Thumbail Support

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, false);
add_image_size('small', 350, 350, false);
add_image_size('medium', 750, 750, false);
add_image_size('large', 1700, 1700, false);


// Show Post Category Parent or First Tag

function first_category_link(){
		$category = get_the_category();
		$category_link = get_the_tags($category -> term_id);
		$parent = get_cat_name($category[1] -> category_subcategory);
		$parent_ID = get_cat_ID($parent);
		$parent_link = get_category_link($parent_ID);

		if ($parent_link) {
			echo '<a href=" '. $parent_link . '">' . $parent . '</a>';
		} else {
			echo '<a href=" '. $category_link . '">' . $category[1] -> name . '</a>';
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
