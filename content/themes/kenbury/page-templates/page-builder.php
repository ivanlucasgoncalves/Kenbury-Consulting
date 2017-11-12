<?php
/**
 * Template Name: Page Builder
 * Template Post Type: page
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
 */

get_header(); ?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() && ! is_home() ) : ?>
		
		<?php // grab featured image from page post
		$background_inner = get_the_post_thumbnail_url(get_the_ID(),'background'); ?>
		<header class="entry-header" style="background-image:url(<?php echo $background_inner ?>);">
			<div class="cnt-header">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-10">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</div>
					</div>
				</div>
			</div>
		</header><!-- .entry-header -->
	
	<?php endif; ?>
	
	<section class="entry-content">
		
		<?php get_template_part('template-parts/part', 'modules'); ?>
		
	</section><!-- .entry-content -->
		
</article><!-- #post-<?php the_ID(); ?> -->
	
<?php get_footer(); ?>