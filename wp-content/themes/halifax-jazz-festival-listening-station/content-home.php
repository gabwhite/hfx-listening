<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Halifax Jazz Festival - Listening Station
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<img class="home-tent" src="<?php echo get_template_directory_uri(); ?>/images/jazz-tent.png"  alt="Painting of Halifax Jazz festival tent">
		<button class="home"><a href="http://localhost:8888/02-hfx-jazz/artists">Start</a></button>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'halifax-jazz-festival-listening-station' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
