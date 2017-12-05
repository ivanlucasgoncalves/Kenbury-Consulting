<?php
/**
 * Template Name: Page Builder
 * Template Post Type: page
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php get_template_part('template-parts/part', 'modules'); ?>
          
      </article><!-- #post-<?php the_ID(); ?> -->

    </div>
  </div>
</div>

<?php get_footer(); ?>