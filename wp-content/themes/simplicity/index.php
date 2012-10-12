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

<!-- #header -->
<div id="index-header" class="row">
	<div class="span10 offset2">
		<!-- Logo Here -->
		Logo Placeholder
	</div>
	<div id="index-header-divider"></div>
</div>

<!-- /#header -->

<div class="span10 offset2">
	<!-- #hero -->
	<div id="hero" class="row">
		<h1><span class="large">Hi,</span> my name is <strong>Troy Parkinson</strong> and I'm a software engineer, graphic designer, and gosh-darnit, good guy that loves to create <em>practical</em> web apps, iOS apps, and other intuitive software that works using standards-driven design.</h1>
		<div class="row">
			<button class="btn btn-primary btn-large btn-hero centered-block">Contact me today to <strong>have a chat</strong>.</button>
		</div>
	</div>
	<!-- /#hero -->

	<!-- #body-content -->
	<div id="body-content" class="row">
		<div class="content-header row">
			<div id="slider" class="span5">
				<!-- Slider code here -->Some placeholder text
			</div>
			<div id="body-nav" class="span4">
				<div class="arrow"></div>
				<ul class="unstyled">
					<li class="contact-button"><a href="#" title="Contact">Contact</a></li>
					<li class="about-button"><a href="#" title="About Me">About</a></li>
					<li class="work-button"><a href="#" title="Work">Work</a></li>
					<li class="blog-button"><a href="#" title="Blog">Blog</a></li>
				</ul>
			</div>
		</div>

		<!-- #contact-me -->
		<div id="contact-me" class="row">
			<div class="span5 offset3 rotate-neg5 ">
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
		<!-- /#contact-me -->
	</div>
	<!-- /span10 offset2 -->
</div>
<!-- /#body-content -->

<?php get_footer(); ?>