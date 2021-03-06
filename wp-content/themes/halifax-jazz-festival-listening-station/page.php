<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Halifax Jazz Festival - Listening Station
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main artists" role="main">
			<section id="page-wrap">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			</section> <!-- end of page wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->

