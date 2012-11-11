<?php
/*
* Theme: "Simplicity"
* Author: Troy Parkinson
* Created: 11/10/2012
* File: enqueue.php
* Description: Enqueue any scripts or styles here.
*/

/*********************************
 * ENQUEUE SCRIPTS/STYLES
 * Enqueue javascript files and styles to be used site-wide.
 ********************************/
add_action('wp_enqueue_scripts', 'simp_enqueue_scripts');
function simp_enqueue_scripts() {
	if (!is_admin()) {
		/* Add Javascript */
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.8.2', true);
		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
		wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/vendor/html5-3.6-respond-1.1.0.min.js', false, '3.6', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min', array('jquery'), '1.0', true);
		wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true);
		wp_enqueue_script('slides', get_template_directory_uri() . '/js/vendor/slides.jquery.min.js', array('jquery'), '1.0', true);
		
		/* Add styles */
	    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', false, '2.0', 'all');
	    wp_enqueue_style('bootstrap-responsive', get_stylesheet_directory_uri() . '/css/bootstrap-responsive.min.css', false, '2.0', 'all');
		wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', false, '1.0', 'all');
		wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Scada|Archivo+Narrow:700,400', false, '1.0', 'all');
	}
}

?>