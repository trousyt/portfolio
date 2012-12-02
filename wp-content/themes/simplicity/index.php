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

  <!-- =========================================
       CONTENT
       ========================================= -->
          <!-- section#content-wrapper -->
          <section id="index">

            <!-- header -->
            <header class="buffer ">
              <div class="row">
                <div class="logo">
                  <a href="/"><img src="<?php echo get_template_directory_uri() . '/img/layout_main-logo.png' ?>"></a>
                </div>
              </div>
              <div class="divider1"></div>
            </header>
            
            <!-- #body-wrapper -->
            <div id="body-wrapper" class="buffer">
              <!-- #hero -->
              <div id="hero">
                <div class="row">
                  <div class="span2">
                    <h1 class="circular">Hello.</h1>
                  </div>
                  <div class="span8">
                    <h1 class="title">My name is <a href="/about"><strong>Troy Parkinson</strong></a> and I'm a software developer and graphic designer. I create practical web apps, iOS apps, and other intuitive software that makes life easier by using proven, standards-driven design.
                    </h1>
                    <div >
                        <a href="/contact" class="btn btn-inverse btn-large">Contact me today to <strong>have a chat</strong>.</a>
                      </div>
                  </div>
                </div>
                <div class="divider1"></div>
              </div>
              <!-- /#hero -->
            
              <!-- .row -->
              <!--<div class="row">-->
                <!-- #body-content -->
                <div id="body-content">
                  <div class="row">
                    <div class="span6">
                      <div id="slides">
                        <div class="slides_container">
                          <div>
                            <p>Test 1</p>
                          </div>
                          <div>
                            <p>Test 2</p>
                          </div>
                          <div>
                            <p>Test 3</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span4">
                      <div id="body-nav">
                        <div class="arrow"></div>
                        <ul class="unstyled">
                          <li class="nav-button contact"><a href="/contact" title="Contact">Contact</a></li>
                          <li class="nav-button about"><a href="/about" title="About">About</a></li>
                          <li class="nav-button work"><a href="/portfolio" title="Portfolio">Portfolio</a></li>
                          <li class="nav-button blog"><a href="/blog" title="Blog">Blog</a></li>
                        </ul>
                      </div>
                    </div>                   
                  </div>
                </div>
              <!-- /row -->

            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->

          <script>
            jQuery(document).ready(function($) {
              $('#slides').slides({
                play: 5000
              });
            })
          </script>
      
<?php get_footer(); ?>