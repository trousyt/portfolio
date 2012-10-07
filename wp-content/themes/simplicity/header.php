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
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="author" content="Troy Parkinson" />
  <meta name="contact" content="troy@troypark.com" />
  <meta name="copyright" content="Copyright (c)2012 Troy Parkinson. All rights reserved." />
  <meta name="keywords" content="programming, computers, graphic design, ruby, rails, javascript, software, architecture, design" />

  <!-- Add meta data about this specific page and insert into head -->

	<!-- CSS & OTHER LINK-RELS -->
  <?php wp_enqueue_style('main', get_stylesheet_directory_uri() . '/main.css', false, '1.0', 'all');  ?>
  <?php wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Scada|Archivo+Narrow:700,400', false, '1.0', 'all'); ?>

	<?php wp_head(); ?>
  
  
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<!-- Topbar -->
    