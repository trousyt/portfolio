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
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="author" content="Troy Parkinson" />
  <meta name="contact" content="troy@troypark.com" />
  <meta name="copyright" content="Copyright (c)2012 Troy Parkinson. All rights reserved." />
  <meta name="keywords" content="programming, computers, graphic design, ruby, rails, javascript, software, architecture, design" />

	<!-- CSS/JAVASCRIPT -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>
  <!-- .wrapper -->
  <div class="wrapper">

    <!-- #topbar -->
    <div id="topbar">
      <div class="container">
        <ul class="unstyled collapse-list pull-right">
          <li><a href="http://github.com/trousyt">GitHub</a></li>
          <li><a href="http://twitter.com/trousyt">Follow me on Twitter</a></li>
          <li><a href="http://www.linkedin.com/pub/troy-parkinson/38/592/720">Follow me on LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <!-- /#topbar -->
    
    <!-- #content-wrapper -->
    <div id="content-wrapper">
      <div class="container">
        <div class="span10">