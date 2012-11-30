<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 11/29/12
  * File: projects.php
  * Description: Handles the projects landing page.
  */
?>

<?php get_header(); ?>

          <!-- section#content-wrapper -->
          <section id="work">

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
                      <li class="about nav-item">
                        <a href="about.html"><div class="bl about-back"></div>About</a>
                      </li>
                      <li class="work nav-item active">
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
              	while ( have_posts() ) : the_post(); ?>

                <header>
                  <div class="row">
                    <div class="span7">
                      <h3 class="tagline em"><?php the_excerpt() ?></h3>
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
                  <?php
                  	$content = apply_filters('the_content', post_content);
                  	echo $content;
                  ?>

                  <!-- #portfolio -->
                  <div id="portfolio" class="buffer2x clearfix">
                  	<!-- loop -->
                  	<?php
                  	$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
										$loop = new WP_Query( $args ); 
										while ($loop->have_posts()) : $loop->the_post();
										?>
										
										<div class="portfolio-item">
                      <div class="img" alt="<?php echo get_the_content() ?>"><?php the_post_thumbnail('project-thumbnail') ?></div>
                      <aside>
                      	<div><a href="<?php the_permalink() ?>"><?php the_title() ?></a> / <?php the_category(', ') ?></div>
                      	<div><small>Tags</small></div>
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