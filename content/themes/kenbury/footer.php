<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="ctn-lnks-footer">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'menus-footer' ) ) : ?>
						<?php dynamic_sidebar( 'menus-footer' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p><?php printf( esc_html__( 'COPYRIGHT © 2017', 'starter-theme' )); ?>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'All rights reserved.', 'starter-theme' )); ?></p>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
