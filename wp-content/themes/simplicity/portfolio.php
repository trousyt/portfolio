<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

  <!-- =========================================
       INDEX
       ========================================= -->
          <!-- section#content-wrapper -->
          <section id="work">

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
                      <li class="work nav-item active">
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
                      <h1>Portfolio</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <!-- .content -->
                <div class="content buffer">

                  <?php the_content() ?>

                  <!-- #portfolio -->
                  <div id="portfolio" class="buffer2x clearfix">
                  	<!-- loop -->
                  	<?php
                  	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
										$loop = new WP_Query( $args ); 
										while ($loop->have_posts()) : $loop->the_post();
										?>
										
										<div class="portfolio-item">
                      <div class="img" alt="<?php echo get_the_excerpt() ?>">
                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('project-thumb-size') ?></a>
                      </div>
                      <aside>
                      	<div class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
                        <div class="cats"><?php the_category(', ') ?></div>
                      	<div class="tags"><small><?php the_tags('', ' ') ?></small></div>
                      </aside>
                    </div>
										
										<?php endwhile; ?>
										<!-- /loop -->

                  </div>
                  <!-- /#portfolio -->

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
                  