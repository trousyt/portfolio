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
                        <a href="/portfolio"><div class="bl work-back"></div>Work</a>
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
                      <h3 class="tagline em">
                        <?php 
                          $tagline_meta = get_post_meta( get_the_ID(), 'tagline', true );
                          if ( $tagline_meta != '' ) {
                            echo $tagline_meta;
                          }
                        ?>
                      </h3>
                    </div>
                    <div class="span3 right-align">
                      <h1>Work</h1>
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

                    <div id="project-banner" class="span10">
                      <div class="banner">
                        <aside style="float:left; background-color: rgba(255,255,255,0.6); width: 400px; height: 100px;">
                          <div><?php the_title() ?></div>
                          <div>Categories <small><?php the_category(', ') ?></small></div>
                          <div>Tags <small>Test</small></div>
                      </aside>
                        <?php kd_mfi_the_featured_image( 'project-banner', 'portfolio', 'project-banner-size' ) ?>
                        
                      </div>
                      
                    </div>

                    <div id="project-content">
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