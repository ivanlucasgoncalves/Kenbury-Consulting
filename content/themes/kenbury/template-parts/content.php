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
    <?php $tags = wp_get_post_tags($post->ID);
    if ($tags) {
        $html = '<div class="post_tags"><p><span>Tags:</span>';
        foreach ($tags as $tag) {
            $html .= " #{$tag->name}";
        }
        $html .= '</p></div>';
    }
    echo $html; ?>

</article><!-- #post-<?php the_ID(); ?> -->
