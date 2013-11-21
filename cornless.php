<?php
/**
 * Plugin Name: CornLess Plugin
 * Plugin URI: http://cornlessthemes.com
 * Description: Provides functionality for CornLess Themes.
 * Version: 1.0.0
 * Author: CornLess Themes
 * Author URI: http://cornlessthemes.com
 * License: GPL2
 */
 
// Load internationalization
add_action('init', 'cornless_load_translation_file');
 
function cornless_load_translation_file(){
	$plugin_path = plugin_basename( dirname( __FILE__ ) .'/languages' );
 	load_plugin_textdomain('cornless', false, $plugin_path );
}
 
function cornless_load_scripts() {	
	if (!is_admin()) {
		//wp_enqueue_style( 'give-styles', plugin_dir_url( __FILE__ ).'css/styles.css' ,array(), "1.0", 'all' );	
		//wp_enqueue_script( 'give-scripts',plugin_dir_url( __FILE__ ).'/js/scripts.js' ,array( 'jquery' ), "1.0", true );
	}
	if(is_admin()) {
		//wp_enqueue_script('custom-js', plugin_dir_url( __FILE__ ).'/js/custom-js.js');
		//wp_enqueue_style('jquery-ui-custom', plugin_dir_url( __FILE__ ).'/css/jquery-ui-custom.css');
	}
}
add_action('init', 'cornless_load_scripts');	
 
function cornless_add_footernote() {
    echo '<p>CornLess Plugin is running!</p>';
}
add_action('wp_footer', 'cornless_add_footernote');