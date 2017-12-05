<?php
/**
 * Template part for displaying content Blog blocks
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kenbury
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blk-blog inner-blks'); ?> <?php if (has_post_thumbnail()) : ?>
style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)" <?php 
endif; ?>>

  <div class="row justify-content-md-between align-items-center">
      <div class="col-md-5">
          <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-md-6 col-lg-5">
          <div class="ctn-read">
    <?php the_content(__('')); //Adding more tag without using any default text?>
              <a href="<?php the_permalink() ?>" class="lnk-read">Read the article</a>
          </div>
      </div>
  </div>

</article><!-- #post-<?php the_ID(); ?> -->
