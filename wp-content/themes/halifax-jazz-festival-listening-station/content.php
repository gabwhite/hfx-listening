<?php
/**
 * @package Halifax Jazz Festival - Listening Station
 */
?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry-content">
					
				<?php
					$args = array(
				        'post_type' => 'marcato_artist',
				        'posts_per_page' => -1, 
				        'orderby'=> 'title', 
				        'order' => 'ASC'
					);

					$query = new WP_Query($args);
					$count = 0;
					foreach($query->posts as $post){
				        $imageID = get_post_thumbnail_id($post->ID);
				        $artistbio = get_post_meta($post->ID, "marcato_artist_bio_limited");
				        $youtube = get_post_meta( $post->ID, "marcato_artist_custom_0_value");

				        if( $youtube[0] && $artistbio[0] && get_the_post_thumbnail($post->ID, 'large')   ){
				        	echo "<div class=\"post-inner\">";
				            echo "<div class='artist'>";
				       			echo "<div class='artistimg'>";
				       				echo get_the_post_thumbnail($post->ID, 'large');
				        		echo "</div>";

				        		echo "<div class=\"artist-text\">";
				        			echo "<h2>".$post->post_title . "</h2>";
				       				
				            ?>
				            		
				            		<h4>Now Playing:</h4>
									<p><?php echo get_field("song_title"); ?> </p>
				            	</div> <!-- end of artisttext -->
							</div> <!-- end of artist -->
			<footer class="entry-footer">

				<div class="footer-icon">
					<a class="fancybox-media" href=" <?php echo $youtube[0]; ?>"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/listen-icon.png"  alt="Listen Icon"> 
					</a>
					<p>Listen</p>
				</div>

				<div class="artist-info">
						<a href="#">
							<img src=" <?php echo get_template_directory_uri(); ?>/images/info-icon.png" alt="Arrow Icon">
						</a>
					</a>
				</div>

			<!-- MODAL WITH BIO INFO -->

			</footer><!-- .entry-footer -->
			<div class="artist-bio">
				<div class="scrolly">
					<h3><?php echo get_the_title(); ?></h3> <!-- artist name -->
					<p><?php echo $artistbio[0]; ?></p> <!-- Bio info -->
				</div>

				<div class="close-btn">
					<p>Close</p>
						<img class="close" src=" <?php echo get_template_directory_uri(); ?>/images/close-icon.png" alt="Close Icon">
				</div>
			</div>
	</div> <!-- end of post-inner -->
		<?php 

/*
EDIT BELOW FOR AD SPACE
*/

	        if( ($count % 6 == 0) && ($count >= 5))  {

	        	echo "<div class=\"post-inner\"><!-- modular item -->";
					echo "<div class='artist ad'> 
							<h2>Tell us about your festival experience for the chance to win a prize.</h2>
							<p>This survey will ask you a few quick questions about your experience at the 2014 Halifax Jazz Festival. Once you’ve completed the survey, let one of the Jazz Fest representatives know and you’ll receive a tagged promotional item and the chance to win a great prize.  </p>
						  </div>

		        		<footer class='entry-footer'>
							<div class='footer-icon'>
								<a href='javascript:this.location = \"/survey\"'>	
								<img src='http://tdjazzfest.impactworkshop.ca/wp-content/themes/halifax-jazz-festival-listening-station/images/survey-icon-white-footer.png'alt='Survey Icon'> 
								</a>
								<p>Go to survey</p>
							</div>

							<div class='survey-arrow'>
								<a href='javascript:this.location = \"/survey\"'>	
								<img src='http://tdjazzfest.impactworkshop.ca/wp-content/themes/halifax-jazz-festival-listening-station/images/right-arrow-icon.png'alt='Arrow Icon'> 
								</a>
							</div>
						</footer>
					 </div>
					 ";

	        }
	        $count++;
	        	
	        }

		}
		?>
		</div><!-- .entry-content -->
		</article><!-- #post-## -->
