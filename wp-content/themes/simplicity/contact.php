<?php
/*
Template Name: Contact
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
          <section id="contact">

            <!-- header -->
            <header class="buffer ">
              <div class="row">
                <div class="span4"> <!-- offset 2 -->
                  <div class="logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri() . '/img/layout_main-logo.png' ?>"></a>
                  </div>
                </div>
                <div class="span6">
                  <div class="nav pull-right">
                    <ul>
                      <li class="contact nav-item active">
                        <a href="/contact"><div class="bl contact-back"></div>Contact</a>
                      </li>
                      <li class="about nav-item">
                        <a href="/about"><div class="bl about-back"></div>About</a>
                      </li>
                      <li class="work nav-item">
                        <a href="/portfolio"><div class="bl work-back"></div>Portfolio</a>
                      </li>
                      <li class="blog nav-item">
                        <a href="http://blog.troypark.com"><div class="bl blog-back"></div>Blog</a>
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
                      <h3 class="tagline">
                        <small>
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
                      <h1>Contact</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <div class="content buffer">
                  <?php the_content() ?>
                  <p class="buffer">
                    <h2>Use these nifty social mediums (or vanilla email):</h2>
                    <ul class="unstyled collapse-list padl buffer">
                      <li><a href="http://github.com/trousyt"><i class="icon-heart"></i> Visit me on GitHub</a></li>
                      <li><a href="http://twitter.com/trousyt"><i class="icon-heart"></i> Follow me on Twitter</a></li>
                      <li><a href="http://www.linkedin.com/pub/troy-parkinson/38/592/720"><i class="icon-heart"></i> Visit me on LinkedIn</a></li>
                      <li><a href="mailto:troy@troypark.com"><i class="icon-envelope"></i> troy [at] troypark.com</a></li>
                    </ul>
                  </p>
                  <p>
                    <h3>Or use this fancy contact form:</h3>
                    <!-- #contact-me -->
                    <div id="contact-me">
                      <div class="span6 offset3">
                        <div id="contact-me-inner">
                          <form id="contact-form">
                            <div class="info row">
                              <h2>First, briefly introduce yourself.</h2>
                              <input id="name" type="text" placeholder="Name" />
                              <input id="email" type="email" placeholder="Email" />
                            </div>
                            <div class="message row">
                              <h2>What's on your mind?</h2>
                              <textarea rows="5"></textarea>
                            </div>
                            <div class="row">
                               <button class="submit btn btn-inverse btn-large">Send it off!</button>
                            </div>
                          </form>
                        </div>
                      </div>

                    </div>
                    <!-- /#contact-me -->
                  </p>
                <?php endwhile; ?>

              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->
      
<?php get_footer(); ?>
                  