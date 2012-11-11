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
                  <div class="span3">Placeholder</div>
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
                        <a href="#contact-me" class="btn btn-go btn-large">Contact me today to <strong>have a chat</strong>.</a>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /#hero -->
            
              <!-- .row -->
              <div class="row">
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
                      <script type="text/javascript">
                        $(function() {
                          $('#slides').slides();
                        });
                      </script>
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
                <!-- /#body-content -->
              </div>
              <!-- /row -->

              <!-- row -->
              <div class="row">
                <!-- #contact-me -->
                <div id="contact-me" class="rotate-neg5">
                  <div class="span6 offset3">
                    <div id="contact-me-inner">
                      <form id="contact-form">
                        <div class="info row">
                          <h2>Who are you?</h2>
                          <input id="name" type="text" placeholder="Name" />
                          <input id="email" type="email" placeholder="Email" />
                        </div>
                        <div class="message row">
                          <h2>What's on your mind?</h2>
                          <textarea rows="5"></textarea>
                        </div>
                        <div class="row">
                           <button class="submit btn btn-inverse btn-large">Say hello!</button>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
                <!-- /#contact-me -->
              </div>
              <!-- /row -->

            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->
      
<?php get_footer(); ?>