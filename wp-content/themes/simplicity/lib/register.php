<?php
/*
* Theme: "Simplicity"
* Author: Troy Parkinson
* Created: 11/10/2012
* File: register.php
* Description: Register this custom theme, post types, taxonomies, and meta fields.
*/

/*********************************
 * REGISTER CUSTOM POST TYPES
 * Register custom post types and add any applicable
 * "taxonomies"/categories.
 ********************************/
add_action('init', 'simp_register_post_types');
function simp_register_post_types() {
  /* These labels show up in the Admin CP */
  $labels = array(
    'name'          => __('Portfolio'),
    'singular_name' => __('Project'),
    'add_new'       => __('Add New'),
    'add_new_item'  => __('Add Project'),
    'edit_item'     => __('Edit Project'),
    'new_item'      => __('New Project'),
    'view_item'     => __('View Project'),
    'search_items'  => __('Search Projects'),
    'not_found'     => __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in trash'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Registers our custom Project/Portfolio post type',
    'public'        => true,
    'publicly_queryable' => true,
    'show_ui'       => true,
    'show_in_menu'  => true,
    'show_in_admin_bar' => true,
    'query_var'     => true,
    'rewrite'       => array('slug' => 'portfolio'),
    'capability_type' => 'post',
    'hierarchical'  => false,
    'menu_position' => null,
    'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields')
  );

  register_post_type('portfolio', $args);
}


/*********************************
 * REGISTER CUSTOM TAXONOMIES (CATEGORIES)
 * Register custom taxonomies.
 ********************************/
add_action('init', 'simp_register_taxonomies', 0);
function simp_register_taxonomies() {
  $label = array(
    'name'          => __('Project Categories'),
    'singular_name' => __('Project Category'),
    'search_items'  => __('Search Project Categories'),
    'all_items'     => __('All Project Categories'),
    'parent_item'   => __('Parent Project Category'),
    'parent_item_colon' => __('Parent Project Category:'),
    'edit_item'     => __('Edit Project Category'),
    'update_item'   => __('Update Project Cateogory'),
    'add_new_item'  => __('Add New Project Category'),
    'new_item_name' => __('New Project Category'),
    'menu_name'     => __('Project Categories')
  );

  $args = array(
    'hierarchical'  => true, 
    'labels'        => $labels,
    'singular_label' => 'Category', 
    'rewrite'       => true
  );

  // Register the category.
  register_taxonomy('project_category', 'portfolio', $args);
}

/*********************************
 * REGISTER CUSTOM META FIELDS
 * Register custom admin CP UI functionality.
 ********************************/
/*add_action('add_meta_boxes', 'simp_init_custom_admin');
function simp_init_custom_admin() {
  add_meta_box(
    'project_technologies_used', 
    __('Technologies Used'), 
    'project_technologies_used_content', 
    'portfolio', 
    'side', 
    'high');
}

function project_technologies_used_content($post) {
  $custom = get_post_custom($post->ID);
  $technologies_used = $custom['project_technologies_used'][0];

  // Print the HTML output
  wp_nonce_field(plugin_basename(__FILE__), 'project_technologies_used_content_nonce')
  echo '<label for="project_technologies_used">' . __("What technologies were used for this project?") . '</label>';
  echo '<input type="text" id="project_technologies_used" name="project_technologies_used" value="' . $technologies_used . '" />';
}*/

/* Make sure to save the custom post data */
/*add_action('save_post', 'simp_save_post_meta');
function simp_save_post_meta($post_id) {

  // If auto-save, exit function.
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    return;

  // Update the post meta data.
  update_post_meta($post_id, 'project_technologies_used', $_POST['project_technologies_used']);
}*/