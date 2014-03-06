<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 *
 * @package Ridizain
 * @since Ridizain 1.0
 */
?>

		</div><!-- #main -->
</div><!-- #page -->
		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'ridizain_credits' ); ?>
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	<?php wp_footer(); ?>
</body>
</html>