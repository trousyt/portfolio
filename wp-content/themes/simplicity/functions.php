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

/* SIMPLICITY_SETUP
 * Setup with custom theme routines.
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

/* REGISTER_CUSTOM_POST_TYPES
 * Register custom post types and add any applicable
 * "taxonomies"/categories.
 */
add_action('init', 'register_custom_post_types');
if (! function_exists('register_custom_post_types')) :
  function register_custom_post_types() {

    /* These labels show up in the Admin CP */
    $labels = array(
      'name' => _x('My Portfolio', 'post type general name'),
      'singular_name' => _x('Project', 'post type singular name'),
      'add_new' => _x('Add New', 'portfolio item'),
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
      'query_var' => true,
      'menu_icon' => get_stylesheet_directory_uri() . 'blah.png',
      'rewrite' => array('slug' => 'portfolio'),
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title','editor','thumbnail')
    );

    register_post_type('portfolio', args);
    register_taxonomy(
      'categories', 
      array('portfolio'), 
      array(
        'hierarchical' => true, 
        'label' => 'Categories', 
        'singular_label' => 'Category', 
        'rewrite' => true
      )
    );
  }

endif;

/* INIT_CUSTOM_ADMIN
 * Register custom admin UI functionality.
 */
add_action('admin_init', 'init_custom_admin');
if (! function_exists('init_custom_admin')) :
  function init_custom_admin() {
    add_meta_box('technologies_used-meta', 'Technologies Used', 'technologies_used', 'portfolio', 'side', 'low');
  }

  function technologies_used() {
    global $post;
    $custom = get_post_custom($post->ID);
    $technologies_used = $custom['technologies_used'][0];
    ?>
    <label>Technologies:</label>
    <input name="technologies_used" value=<?php echo $technologies_used; ?>>
    <?php
  }

  /* Make sure to save the custom post data */
  add_action('save_post', 'save_custom_post_meta');
  function save_custom_post_meta() {
    global $post;
    update_post_meta($post->ID, 'technologies_used', $_POST['technologies_used']);
  }
endif;

?>