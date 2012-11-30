<?php
/*
* Theme: "Simplicity"
* Author: Troy Parkinson
* Created: 11/10/2012
* File: config.php
* Description: Register this custom theme, post types, taxonomies, and meta fields.
*/

add_theme_support('post-thumbnails');

/*********************************
 * SIMPLICITY_SETUP
 * Setup with custom theme routines.
 ********************************/
add_action('after_setup_theme', 'simp_setup');
if (! function_exists('simp_setup')) :
  function simp_setup() {
  	// Add support for project thumbnails;
  	add_image_size('project-thumbnail', 303, 220, true);

    // We are providing our own filter for excerpt_length (or using the unfiltered value)
    // remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
    
    // For language support
    //load_theme_textdomain('simplicity', get_template_directory() . '/languages');
    
    // Add support for post formats
    //add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image') );
  }
endif;  // /simplicity_setup


?>