<?php

function load_stylesheets() {
    wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_style('main');
	
	wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('fontAwesome');

	wp_register_style('banner', get_template_directory_uri() . '/css/banner.css', array(), false, 'all');
	wp_enqueue_style('banner');

    wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), false, 'all');
    wp_enqueue_style('navbar');

    wp_register_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('bootstrap_min');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

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
        'primary-menu' => 'Primary Menu',
        'movie-year' => 'Movie Year',
        'movie-genre' => 'Movie Genre',
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

?>