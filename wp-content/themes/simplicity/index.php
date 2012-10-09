<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 10/8/2012
  * File: index.php
  * Description: Handles default first-page structure.
  */
?>

<?php get_header(); ?>
<div class="row">
	<div id="hero" class="span10">
		<h1 class="inline strong">Hi,</h1> <h2 class="inline">my name is <strong>Troy Parkinson</em> and I'm a software engineer, graphic designer, and <em>good guy</em> that loves to create <em>practical</em> web apps, iOS apps, and other intuitive software that works using standards-driven design.</h2>
		<button class="btn btn-primary btn-large">Contact me today to <strong>have a chat</strong>.</button>
	</div>
</div>

<!-- #body-content -->
<div id="body-content" class="row">
	<div id="slider">
		<!-- Slider code here -->
	</div>
	<div id="body-nav">
		<ul class="unstyled">
			<li><a href="#" title="Contact">Contact</a></li>
			<li><a href="#" title="About Me">About</a></li>
			<li><a href="#" title="Work">Work</a></li>
			<li><a href="#" title="Blog">Blog</a></li>
		</ul>
	</div>

	<div id="contact-me" class="rotate15">
		<div class="span5 offset3">
			<form id="contact-form">
				<div class="row">
					<input id="name" type="text" placeholder="Name" />
					<input id="email" type="email" placeholder="Email" />
				</div>
				<div class="row">
					<h3>Let's chat about...</h3>
					<textarea rows="5"></textarea>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /#body-content -->

<?php get_footer(); ?>