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
$categories = get_categories();
foreach($categories as $category) {
   echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
} 
}



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

// Custom Meta Boxes

add_action('add_meta_boxes', 'artwork_metadata');

function artwork_metadata(){
	add_meta_box(
		'artwork_metadata',
		__('Artwork Metadata', 'myartwork_meta'),
		'artwork_general_meta',
		'artwork',
		'normal',
		'high'
		);
}

function artwork_general_meta($post) {
	wp_nonce_field(plugin_basename(__FILE__), 'artwork_details_meta_nonce');

	// Year
	echo '<br>';
	echo '<label for="artwork_year_meta"> Year: </label>';
	echo '<input type="text" id="artwork_year_meta" name="artwork_year_meta" placeholder=" YYYY "';
	echo '<br>';
	echo '<br>';
	// Medium
	echo '<br>';
	echo '<label for="artwork_medium_meta"> Medium: </label>';
	echo '<input type="text" id="artwork_medium_meta" name="artwork_medium_meta" placeholder="  ">';
	echo '<br>';
	// Material
	echo '<br>';
	echo '<label for="artwork_details_material"> Material: </label>';
	echo '<input type="text" id="artwork_details_material" name="artwork_details_material" placeholder="  ">';
	echo '<br>';
	// Dimensions
	echo '<br>';
	echo '<label for="artwork_details_dimensions"> Dimensions: </label>';
	echo '<input type="text" id="artwork_details_dimensions" name="artwork_details_dimensions" placeholder=" H x W x D in inches ">';
	echo '<br>';
	// Description
	echo '<br>';
	echo '<label for="artwork_details_description"> Description: </label>';
	echo '<input type="text" id="artwork_details_date" name="artwork_details_description" placeholder=" About the work... ">';
	echo '<br>';
	// Exhibition History (Year - Gallery / Event )
	echo '<br>';
	echo '<label for="artwork_details_exhibition_history_year"> Exhibition History: </label>';
	echo '<input type="text" id="artwork_details_exhibition_history_year" name="artwork_details_exhibition_history_year" placeholder=" Year Exhibited ">' 

	. ' - ' . 

		'<input type="text" id="artwork_details_exhibition_history_site" name="artwork_details_exhibition_history_site" placeholder=" Site of Exhibition ">';
	echo '<br>';
}

function artwork_general_meta_save($post_id) {

	if(defined( 'DOING AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	if(!wp_verify_nonce($_POST['artwork_general_meta_nonce'], plugin_basename(__FILE__)))
		return;
	if('page' == $POST['post_type']){
		if(!current_user_can('edit_page', $post_id))
			return;
	} else {
		if(!current_user_can('edit_post', $post_id))
			return;
	}

	$artwork_details_date = $_POST['artwork_details_date'];
	update_post_meta($post_id, 'artwork_details_date', $artwork_details_date);

	$artwork_details_medium = $_POST['artwork_details_medium'];
	update_post_meta($post_id, 'artwork_details_medium', $artwork_details_medium);

	$artwork_details_material = $_POST['artwork_details_material'];
	update_post_meta($post_id, 'artwork_details_material', $artwork_details_material);

	$artwork_details_dimensions = $_POST['artwork_details_dimensions'];
	update_post_meta($post_id, 'artwork_details_dimensions', $artwork_details_dimensions);

	$artwork_details_description = $_POST['artwork_details_description'];
	update_post_meta($post_id, 'artwork_details_description', $artwork_details_description);

	$artwork_details_exhibition_history_year = $_POST['artwork_details_exhibition_history_year'];
	update_post_meta($post_id, 'artwork_details_exhibition_history_year', $artwork_details_exhibition_history_year);

	$artwork_details_exhibition_history_site = $_POST['artwork_details_exhibition_history_site'];
	update_post_meta($post_id, 'artwork_details_exhibition_history_site', $artwork_details_exhibition_history_site);
}

//
//
//
//
//

add_action('add_meta_boxes', 'artwork_credits_meta');

function artwork_credits_meta(){
	add_meta_box(
		'artwork_credits_meta',
		__('Special Thanks and Credits', 'myartwork_credits_meta'),
		'artwork_credits_meta_content',
		'artwork',
		'normal',
		'high'
		);
}

function artwork_credits_meta_content($post) {
	wp_nonce_field(plugin_basename(__FILE__), 'artwork_details_meta_nonce');

	// Credits
	echo '<br>';
	echo '<label for="artwork_details_credits"> Credits: </label>';
	echo '<input type="text" id="artwork_details_credits" name="artwork_details_credits" placeholder=" ">';
	echo '<br>';
	// Special Thanks
	echo '<br>';
	echo '<label for="artwork_details_thanks"> Special Thanks: </label>';
	echo '<input type="text" id="artwork_details_thanks" name="artwork_details_thanks" placeholder=" For Special Thanks...">';
}

function artwork_credits_meta_save( $post_id ) {

	if(defined( 'DOING AUTOSAVE' ) && DOING_AUTOSAVE )
		return;
	if(!wp_verify_nonce($_POST['artwork_credits_meta_nonce'], plugin_basename(__FILE__)))
		return;
	if('page' == $POST['post_type']){
		if(!current_user_can('edit_page', $post_id))
			return;
	} else {
		if(!current_user_can('edit_post', $post_id))
			return;
	}

		$artwork_details_credits = $_POST['artwork_details_credits'];
	update_post_meta($post_id, 'artwork_details_credits', $artwork_details_credits);

		$artwork_details_thanks = $_POST['artwork_details_thanks'];
	update_post_meta($post_id, 'artwork_details_thanks', $artwork_details_thanks);
};

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
