<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 11/29/12
  * File: single-portfolio.php
  * Description: Handles the projects single page view.
  */
?>

<?php
 
error_reporting(E_ALL);
ini_set('display_errors', True);

?>

<?php get_header(); ?>

          <!-- section#content-wrapper -->
          <section id="work">

            <!-- header -->
            <header class="buffer ">
              <div class="row">
                <div class="span4"> <!-- offset 2 -->
                  <div class="logo">
                    <a href="/">Placeholder</a>
                  </div>
                </div>
                <div class="span6">
                  <div class="nav pull-right">
                    <ul>
                      <li class="contact nav-item">
                        <a href="/contact"><div class="bl contact-back"></div>Contact</a>
                      </li>
                      <li class="about nav-item">
                        <a href="/about"><div class="bl about-back"></div>About</a>
                      </li>
                      <li class="work nav-item active">
                        <a href="/portfolio"><div class="bl work-back"></div>Portfolio</a>
                      </li>
                      <li class="blog nav-item">
                        <a href="/blog"><div class="bl blog-back"></div>Blog</a>
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
                      <h1>Portfolio</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <!-- .content -->
                <div class="content buffer">

                  <!-- section#project -->
                  <section id="project">

                    <div id="project-banner">
                      <div class="banner" style="position: relative;">
                        <aside style="position: absolute; background-color: rgba(255,255,255,0.8); width: 400px; height: 120px; top:100px; padding-left: 10px;">
                          <h2>
                            <?php the_title() ?> <br/>
                            <small><?php the_excerpt() ?></small>
                          </h2>
                          <div><strong>Categories</strong> <small><?php the_category(', ') ?></small></div>
                          <div><strong>Tags</strong> <small>Test</small></div>
                        </aside>
                        <?php kd_mfi_the_featured_image( 'project-banner', 'portfolio', 'project-banner-size' ) ?>
                      </div> 
                    </div>

                    <div id="project-content" class="buffer">
                      <?php the_content() ?>
                    </div>

                  </section>
                  <!-- /section#project -->

                </div>
                <!-- /.content -->
                
                <?php endwhile; ?>

              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->
      
<?php get_footer(); ?>