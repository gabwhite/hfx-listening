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

				        $youtube = get_post_meta( $post->ID, "marcato_artist_custom_0_value");
				        $songTitle = get_post_meta($post->ID, "marcato_artist_custom_3_value");

				        if($youtube[0] || $songTitle  && get_the_post_thumbnail($post->ID, 'large') ){
				        echo "<div class=\"post-inner\">";
				            echo "<div class='artist'>";
				       			echo "<div class='artistimg'>";
				       				echo get_the_post_thumbnail($post->ID, 'large');
				        		echo "</div>";

				        		echo "<div class=\"artist-text\">";
				        			echo "<h2>".$post->post_title . "</h2>";
				       				echo "<h4>Now Playing</h4>\n";
				            ?>
							
								<p><?php echo get_field("song_title"); ?> </p>
				            </div>
			<footer class="entry-footer">

				<div class="footer-icon">
					<a class='' href=" <?php echo $youtube[0]; ?>"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/listen-icon.png"  alt="Listen Icon"> 
					</a>
				</div>

				<div class="survey-link">
					<p><?php // echo the_field("link"); ?></p>
				</div>

				<div class="survey-arrow">
				        
						<img src=" <?php echo get_template_directory_uri(); ?>/images/info-icon.png" alt="Arrow Icon">
					</a>
				</div>
			</footer><!-- .entry-footer -->
		</div> <!-- end of artists -->
	</div> <!-- end of post-inner -->
		<?php  
	        }
		}
		?>
		</div><!-- .entry-content -->
		</article><!-- #post-## -->
