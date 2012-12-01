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
                    <a href="/">Placeholder</a>
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
                      <h1>Contact</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <div class="content buffer">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla dignissim dui, et volutpat ante tempor in. Aenean congue, libero id vestibulum volutpat, ipsum est fringilla metus, non faucibus odio urna vitae velit. Cras felis lectus, varius quis tristique at, vestibulum vel dui. Etiam fermentum suscipit nibh eget faucibus. Etiam interdum consequat ipsum, non mattis justo interdum sed. Nullam eleifend feugiat metus euismod molestie. Morbi id convallis dui. Nunc placerat posuere pharetra. Sed a lorem ipsum.</p>
                
                <?php endwhile; ?>

              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->
      
<?php get_footer(); ?>
                  