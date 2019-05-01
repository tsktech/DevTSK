<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevTSK
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info bg-light col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'devtsk' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'devtsk' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://tsktech.in/', 'devtsk' ) ); ?>">
				<?php printf(esc_html__( 'Theme: %1$s by %2$s.', 'devtsk' ), 'DevTSK', 'TSKAMATH TECHNOLOGIES PVT LTD'); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
