<?php
/*
Template Name: About
*/
?>

<?php
 
error_reporting(E_ALL);
ini_set('display_errors', True);

?>

<?php get_header(); ?>

  <!-- =========================================
       INDEX
       ========================================= -->
          <!-- section#content-wrapper -->
          <section id="about">

            <!-- header -->
            <header class="buffer ">
              <div class="row">
                <div class="span4"> <!-- offset 2 -->
                  <div class="logo">
                    <a href="index.html">Placeholder</a>
                  </div>
                </div>
                <div class="span6">
                  <div class="nav pull-right">
                    <ul>
                      <li class="contact nav-item">
                        <a href="contact.html"><div class="bl contact-back"></div>Contact</a>
                      </li>
                      <li class="about nav-item active">
                        <a href="about.html"><div class="bl about-back"></div>About</a>
                      </li>
                      <li class="work nav-item">
                        <a href="work.html"><div class="bl work-back"></div>Work</a>
                      </li>
                      <li class="blog nav-item">
                        <a href="blog.html"><div class="bl blog-back"></div>Blog</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="divider"></div>
              </div>
            </header>
            
            <!-- #body-wrapper -->
            <div id="body-wrapper" class="buffer2x">
              <!-- section#body -->
              <section id="body">

              	<?php 
	          	// Start the page loop.
	          	while ( have_posts() ) : the_post();
	          		$custom_fields = get_post_custom();
	          	?>
	                
                <header>
                  <div class="row">
                    <div class="span7">
                      <h3>
                      	<small class="tagline">
                          <?php 
                            $tagline_meta = get_post_meta( get_the_ID(), 'tagline', true );
                            if ( $tagline_meta != '' ) {
                              echo $tagline_meta;
                            }
                          ?>
                          </small>
                      </h3>
                    </div>
                    <div class="span3 right-align">
                      <h1>About</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <div class="content buffer">
					<?php the_content() ?>
                </div>

                <?php endwhile; ?>
                
              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->

          </section>
          <!-- /section#content-->

<?php get_footer(); ?>
