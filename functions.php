<?php

function load_stylesheets() {
    wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_style('main');
	
	wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('fontAwesome');

	wp_register_style('banner', get_template_directory_uri() . '/css/banner.css', array(), false, 'all');
	wp_enqueue_style('banner');

	wp_register_style('mentors', get_template_directory_uri() . '/css/mentors.css', array(), false, 'all');
	wp_enqueue_style('mentors');
	
    wp_register_style('event-card', get_template_directory_uri() . '/css/event-card.css', array(), false, 'all');
    wp_enqueue_style('event-card');

    wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), false, 'all');
    wp_enqueue_style('navbar');

    wp_register_style('single-event', get_template_directory_uri() . '/css/single-event.css', array(), false, 'all');
    wp_enqueue_style('single-event');

    wp_register_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('bootstrap_min');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
	wp_register_script( 'navbar', get_template_directory_uri() . '/scripts/navbar.js', array(), '1.0', true );
	wp_enqueue_script('navbar');

	wp_register_script( 'tab', get_template_directory_uri() . '/scripts/tab.js', array(), '1.0', true );
	wp_enqueue_script('tab');
}

add_action('wp_enqueue_scripts', 'load_scripts');

require_once('wp-bootstrap-navwalker.php');

/** =============
	THEME OPTIONS
	=============
*/
add_theme_support('menus');
add_theme_support('post-thumbnails');

/** =====
	MENUS
	=====
*/
register_nav_menus(

    array(

        'top-menu' => 'Top Menu',
        'footer-menu' => 'Footer Menu',
    )

    );

/** ====================
	REMOVE TOP ADMIN BAR
	====================
*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action( 'get_header', "remove_admin_login_header");

/** =================
 * ==================
	CUSTOM POST TYPES
	=================
	=================
*/

/** =====================
	EVENT CUSTOM POST TYPE
	=====================
*/
function cptui_register_my_cpts_event() {

	/**
	 * Post Type: packages.
	 */

	$labels = [
		"name" => __( "events", "startupsouth" ),
		"singular_name" => __( "event", "startupsouth" ),
	];

	$args = [
		"label" => __( "events", "startupsouth" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "event", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
	];

	register_post_type( "event", $args );
}

add_action( 'init', 'cptui_register_my_cpts_event' );


/** ============
 * ============
	TAXONOMIES
	============
	===========
*/
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: event_categories.
	 */

	$labels = [
		"name" => __( "event_categories", "startupsouth" ),
		"singular_name" => __( "event_category", "startupsouth" ),
	];

	$args = [
		"label" => __( "event_categories", "startupsouth" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'event_category', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "event_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "event_category", [ "event" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

?>

