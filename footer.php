<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pradeepnirmal
 */

?>
 </div>
</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://mreservicesindia.com/', 'pradeepnirmal' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pradeepnirmal' ), 'MRE Services India .com Pvt. Ltd.' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pradeepnirmal' ), 'pradeepnirmal', '<a href="https://www.linkedin.com/in/pradeepkumarnirmal/">Pradeep Nirmal</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div>
<?php wp_footer(); ?>

</body>
</html>
