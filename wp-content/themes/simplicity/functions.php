<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 9/28/2012
  * File: functions.php
  * Description: Register this custom theme and define other helper functions.
  */

/* Add standard support to WP */
add_theme_support('post-thumbnails');


/*********************************
 * SIMPLICITY_SETUP
 * Setup with custom theme routines.
 ********************************/
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
add_action('after_setup_theme', 'simplicity_setup');

/*********************************
 * REGISTER_CUSTOM_POST_TYPES
 * Register custom post types and add any applicable
 * "taxonomies"/categories.
 ********************************/
function simp_register_post_types() {

  /* These labels show up in the Admin CP */
  $labels = array(
    'name' => __('My Portfolio'),
    'singular_name' => __('Project'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add Project'),
    'edit_item' => __('Edit Project'),
    'new_item' => __('New Project'),
    'view_item' => __('View Project'),
    'search_items' => __('Search Portfolio'),
    'not_found' => __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_admin_bar' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'portfolio'),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail')
  );

  register_post_type('portfolio', args);
  register_taxonomy(
    'cats', 
    array('portfolio'), 
    array(
      'hierarchical' => true, 
      'label' => 'Categories', 
      'singular_label' => 'Category', 
      'rewrite' => true
    )
  );
}
add_action('init', 'simp_register_post_types');

/*********************************
 * INIT_CUSTOM_ADMIN
 * Register custom admin CP UI functionality.
 ********************************/
function simp_init_custom_admin() {
  add_meta_box('technologies_used-meta', 'Technologies Used', 'technologies_used', 'portfolio', 'side', 'low');
}
add_action('add_meta_boxes', 'simp_init_admin');

function technologies_used($post) {
  $custom = get_post_custom($post->ID);
  $technologies_used = $custom['technologies_used'][0];

  // Print the HTML output
  echo '<label for="technologies_used">' . __("What technologies were used for this project?") . '</label>';
  echo '<input type="text" id="technologies_used" name="technologies_used" value="' . $technologies_used . '" />';
}

/* Make sure to save the custom post data */
add_action('save_post', 'simp_save_post_meta');
function simp_save_post_meta($post_id) {

  // If auto-save, exit function.
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  // Update the post meta data.
  update_post_meta($post_id, 'technologies_used', $_POST['technologies_used']);
}

/*********************************
 * ENQUEUE SCRIPTS/STYLES
 * Enqueue javascript files and styles to be used throughout the site.
 ********************************/
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
add_action('wp_enqueue_scripts', 'simp_enqueue_scripts');

?>