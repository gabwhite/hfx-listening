<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Halifax Jazz Festival - Listening Station
 */
?>

<article class="home" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content home">
		<img class="home-tent" src="<?php echo get_template_directory_uri(); ?>/images/jazz-tent.png"  alt="Painting of Halifax Jazz festival tent">

		<h1>Halifax Jazz festival listening booth</h1>
		<a href="http://localhost:8888/02-hfx-jazz/artists">
		<button class="home">Start</button></a>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'halifax-jazz-festival-listening-station' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->