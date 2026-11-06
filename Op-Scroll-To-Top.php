<?php
/**
 * Plugin Name: Op Scroll To Top
 * Description: A simple scroll to top plugin for WordPress.
 * Version: 1.0.0
 * Author: Your Name
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/* Adding Latest jQuery from Wordpress */
function op_scroll_to_top_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'op_scroll_to_top_latest_jquery');

/* Adding Plugin javascript file */
function op_scroll_to_top_plugin_files() {
	wp_register_script( 'plugin-script', plugins_url('eit-scroll-to-top/js/jquery.scrollUp.min.js'), false, '1.0', true);
    wp_enqueue_script( 'plugin-script' );
}
add_action( 'init', 'op_scroll_to_top_plugin_files' );     

/* Adding plugin javascript active file */
function op_scroll_to_top_plugin_active() {  
	wp_register_script( 'plugin-script-active', plugins_url('eit-scroll-to-top/js/active.js'), false, '1.0', true);
    wp_enqueue_script( 'plugin-script-active' );
}
add_action( 'init', 'op_scroll_to_top_plugin_active' );

/* Adding Plugin custm CSS file */
function op_scroll_to_top_plugin_styles() {   
	wp_register_style( 'plugin-style', plugins_url('css/style.css', __FILE__) );
    wp_enqueue_style( 'plugin-style' );
}
add_action( 'wp_enqueue_scripts', 'op_scroll_to_top_plugin_styles' );
?>