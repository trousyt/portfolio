<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

  <!-- =========================================
       INDEX
       ========================================= -->
          <!-- section#content-wrapper -->
          <section id="blog">

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
                      <li class="contact nav-item">
                        <a href="/contact"><div class="bl contact-back"></div>Contact</a>
                      </li>
                      <li class="about nav-item">
                        <a href="/about"><div class="bl about-back"></div>About</a>
                      </li>
                      <li class="work nav-item">
                        <a href="/portfolio"><div class="bl work-back"></div>Portfolio</a>
                      </li>
                      <li class="blog nav-item active">
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
	          	if ( have_posts() );
	          	while ( have_posts() ) : the_post();
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
                      <h1>Blog</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <div class="content buffer">
                  <!-- Tag Cloud -->
                  <div class="blog-cloud">
                    <?php wp_tag_cloud(); ?>
                  </div>
                  
                  <!-- Blog Entry>
                  <div class="blog-entry">
  					        <!-- Title -->
  					        <div class="blog-title">
  					          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  					        </div>
					        
  					        <!-- Date -->
  					        <div class="blog-date">
  					          <?php the_date(); ?>
  					        </div>
					        
  					        <!-- Body -->
  					        <div class="blog-body">
  					          <?php the_excerpt(); ?>
  					          <span class="blog-more"><a href="<?php the_permalink(); ?>" title="Read On...">Read On...</a></span>
  					        </div>
  					        <!-- /Blog Entry>
					        </div>
                </div>

                <?php endwhile; ?>
                
                <?php else; ?>
                
                <?php endif; ?>
                
              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->

          </section>
          <!-- /section#content-->

<?php get_footer(); ?>
