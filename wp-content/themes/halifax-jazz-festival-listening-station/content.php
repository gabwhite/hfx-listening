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
					
					foreach($query->posts as $post){
				        $imageID = get_post_thumbnail_id($post->ID);
				        $artistbio = get_post_meta($post->ID, "marcato_artist_bio_limited");
				        $youtube = get_post_meta( $post->ID, "marcato_artist_custom_0_value");

				        if($youtube[0] && $artistbio[0] && get_the_post_thumbnail($post->ID, 'large') ){
				        echo "<div class=\"post-inner\">";
				            echo "<div class='artist'>";
				       			echo "<div class='artistimg'>";
				       				echo get_the_post_thumbnail($post->ID, 'large');
				        		echo "</div>";

				        		echo "<div class=\"artist-text\">";
				        			echo "<h2>".$post->post_title . "</h2>";
				       				
				            ?>
				            		<h3> <?php echo get_field("special_guests"); ?> </h3>
				            		<h4>Now Playing:</h4>
									<p><?php echo get_field("song_title"); ?> </p>
				            	</div> <!-- end of artisttext -->
							</div> <!-- end of artist -->
			<footer class="entry-footer">

				<div class="footer-icon">
					<a class="various fancybox.iframe" href=" <?php echo $youtube[0]; ?>"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/listen-icon.png"  alt="Listen Icon"> 
					</a>
				</div>

				<div class="survey-arrow">
						<a href="#">
							<img src=" <?php echo get_template_directory_uri(); ?>/images/info-icon.png" alt="Arrow Icon">
						</a>
					</a>
				</div>

			<!-- MODAL WITH BIO INFO -->

			</footer><!-- .entry-footer -->
			<div class="artist-bio animated fadeInUp">
				<h3>Artist name </h3> <!-- artist name -->
				<p><?php echo $artistbio[0]; ?></p> <!-- Bio info -->

				<h4>Personnel</h4> <!-- Personnel -->
				<p>Artist Name</p>

				<div class="close-btn">
					<p>Close</p>
					<a href="#">
						<img class="close" src=" <?php echo get_template_directory_uri(); ?>/images/close-icon.png" alt="Close Icon">
					</a>
				</div>
			</div>
	</div> <!-- end of post-inner -->
		<?php  
	        }
		}
		?>
		</div><!-- .entry-content -->
		</article><!-- #post-## -->
