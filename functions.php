<?php

function load_stylesheets() {
    wp_register_style('main', get_template_directory_uri() . '/css/style.css?v=1.3', array(), false, 'all');
	wp_enqueue_style('main');
	
	wp_register_style('fontAwesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('fontAwesome');

    wp_register_style('navbar', get_template_directory_uri() . '/css/navbar.css?v=1.3', array(), false, 'all');
    wp_enqueue_style('navbar');

    wp_register_style('bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1.0, 'all');
    wp_enqueue_style('bootstrap_min');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts() {
	wp_register_script( 'navbar', get_template_directory_uri() . '/scripts/navbar.js', array(), '1.0', true );
	wp_enqueue_script('navbar');
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
        'primary-menu' => 'Primary Menu',
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