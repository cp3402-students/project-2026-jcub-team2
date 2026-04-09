<?php
/**
 * The template for displaying the footer
 *
 * @package kctennisblast-theme
 */
?>

	<footer id="colophon" class="site-footer">
		
		<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
			<div class="footer-widgets-container container">
				
				<div class="footer-column footer-branding">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>

				<div class="footer-column footer-contact">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>

				<div class="footer-column footer-hours">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>

				<div class="footer-column footer-connect">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>

			</div>
		<?php endif; ?>

		<div class="site-info">
			<div class="container">
				<p>&copy; <?php echo date_i18n( _x( 'Y', 'copyright date format', 'kctennisblast-theme' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'kctennisblast-theme' ); ?></p>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>