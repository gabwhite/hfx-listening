<?php
/**
 * @package Halifax Jazz Festival - Listening Station
 */
?>


	<div class="post-inner">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title">'), '</a></h2>' ); ?>

			</header><!-- .entry-header -->

			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content artists">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'halifax-jazz-festival-listening-station' ) ); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'halifax-jazz-festival-listening-station' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php endif; ?>

		<footer class="entry-footer">

			<div class="footer-icon">
				<img src=" <?php echo the_field("left_icon"); ?> " alt="Icon"> 
			</div>

			<div class="survey-link">
				<p><?php echo the_field("link"); ?></p>
			</div>

			<div class="survey-arrow">
				<img src=" <?php echo the_field("right_icon"); ?> " alt="Arrow Icon">
			</div>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
	</div> <!-- end post-inner -->

