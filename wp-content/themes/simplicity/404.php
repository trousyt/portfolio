<?php
 /*
  * Theme: "Simplicity"
  * Author: Troy Parkinson
  * Created: 9/28/2012
  * File: 404.php
  * Description: 404 not found page.
  */
?>

<?php get_header(); ?>

  <!-- =========================================
       INDEX
       ========================================= -->
          <!-- section#content-wrapper -->
          <section id="404">

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

                <header>
                  <div class="row center-align">
                    <h1>Oh no! We can't find that page!</h1>
                  </div>
                  <div class="row">
                    <div class="divider1"></div>
                  </div>
                </header>
                
                <!-- .content -->
                <div class="content buffer">

					<p class="lead">You 
						<?php
						#some variables for the script to use
						#if you have some reason to change these, do.  but wordpress can handle it
						$adminemail = get_option('admin_email'); #the administrator email address, according to wordpress
						$website = get_bloginfo('url'); #gets your blog's url from wordpress
						$websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

						  if (!isset($_SERVER['HTTP_REFERER'])) {
					    	#politely blames the user for all the problems they caused
					        echo "tried going to "; #starts assembling an output paragraph
						  } elseif (isset($_SERVER['HTTP_REFERER'])) {
						    #this will help the user find what they want, and email me of a bad link
							echo "clicked a link to"; #now the message says You clicked a link to...
						    #setup a message to be sent to me
							$failuremess = "A user tried to go to $website" . $_SERVER['REQUEST_URI'] . " and received a 404 (page not found) error. ";
							$failuremess .= "It wasn't their fault, so try fixing it. They came from ".$_SERVER['HTTP_REFERER'];
							mail($adminemail, "Bad Link To ".$_SERVER['REQUEST_URI'], $failuremess, "From: $websitename <noreply@$website>"); #email you about problem
						  }
						  echo " <span class=\"smallcaps\">" . $website . $_SERVER['REQUEST_URI'] . "</span>" 
						?> 
						and it doesn't exist. Hmm... Perhaps a Tardis would come in handy here. Anyhow, we <em>profusely</em> apologize for the error! May we suggest using the above navigation or the back button in your browser to get out of here?
					</p>
					<p class="center-align">
						<img src="<?php bloginfo( 'template_directory' ) ?>/img/layout_404.png" title="Page not found.">
					</p>

                </div>
                <!-- /.content -->

              </section>
              <!-- /section#body -->
            </div>
            <!-- /#body-wrapper -->
          </section>
          <!-- /section#content-->

<?php get_footer(); ?>