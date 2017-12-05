<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kenbury
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ctn-innerBlog'); ?>>

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
