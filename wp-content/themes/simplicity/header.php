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

	<!-- CSS/JAVASCRIPT -->
	<?php wp_head(); ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<!-- #topbar -->
    <div id="topbar" class="span12">
      <div class="span10 offset2">
        <ul class="unstyled collapse pull-right">
          <li>GitHub</li>
          <li>Follow me on Twitter</li>
          <li>Follow me on LinkedIn</li>
        </ul>
    </div>
    </div>
    <!-- /#topbar -->
    <!-- #content -->
    <div class="content" class="span10 offset2">
