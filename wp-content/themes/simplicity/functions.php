<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 9/28/2012
  * File: functions.php
  * Description: Register this custom theme and define other helper functions.
  */

add_action( 'after_setup_theme', 'simplicity_setup' );

if (! function_exists('simplicity_setup')) :
  function simplicity_setup() {
    // We are providing our own filter for excerpt_length (or using the unfiltered value)
    // remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
    
    // For language support
    //load_theme_textdomain('simplicity', get_template_directory() . '/languages');
    
    // Add support for post formats
    //add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image') );
  }
endif;  // /simplicity_setup

?>