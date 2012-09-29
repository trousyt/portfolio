<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 9/28/2012
  * File: index.php
  * Description: Handles header and <head> definitions.
  */
?>

<!DOCTYPE html>
<html>
<head>
  <title>
		<?php
			wp_title('|', true, 'right');
		?>
	</title>
  <meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
  
  <!-- CSS & OTHER LINK-RELS -->
  <link rel="stylesheet" href="" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <!-- JS -->
  <?php 
 	 	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', '', '1.8.2', false);
	  wp_enqueue_script('main', get_template_directory() . '/js/main.js', array('jquery'), '1.0', false);
	  wp_enqueue_script('html5shiv', get_template_directory() . '/js/vendor/html5-3.6-respond-1.1.0.min.js', '', '3.6', false);
	  wp_enqueue_script('bootstrap', get_template_directory() . '/js/vendor/bootstrap.min', array('jquery'), '1.0', false);
	  wp_enqueue_script('plugins', get_template_directory() . '/js/plugins.js', array('jquery'), '1.0', false);
  ?>
  
</head>
<body class="<?php body_class(); ?>">
	<div id="container">
		<!-- Topbar -->