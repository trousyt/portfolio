<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 11/29/12
  * File: projects.php
  * Description: Handles the projects landing page.
  */
?>


<?php get_template_part('templates/projects', 'header') ?>

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
                  
<?php get_template_part('templates/projects', 'footer') ?>