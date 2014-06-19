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

		<h1>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>                    
                <img src="<?php echo get_template_directory_uri(); ?>/images/HJF-logo.svg" alt="Halifax Jazz Festival">
                </a>
		</h1>
		<h2 class="home">Listening Booth</h2>
		<a href="http://localhost:8888/02-hfx-jazz/artists">
		<button class="home">Start</button></a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
