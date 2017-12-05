<?php
/**
 * Template part for displaying header on Inner Pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kenbury
 */
 
?>

<?php // grab featured image from page post
if (is_home() && ! is_front_page()) : ?>
    <?php $back_home = wp_get_attachment_url(get_post_thumbnail_id(get_option('page_for_posts')), 'background'); ?>
<?php else : ?>
    <?php $back_pages = get_the_post_thumbnail_url(get_the_ID(), 'background'); ?>
<?php endif; ?>

<header class="entry-header" <?php if ($back_pages) : ?>
style="background-image:url(<?php echo $back_pages ?>);"
<?php elseif ($back_home) :?>
style="background-image:url(<?php echo $back_home; ?>);" 
<?php else :?>
<?php endif; ?>>

    <?php
    // Template part for default top header
    require 'top-headers.php'; ?>
    <div class="cnt-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                  
                    <?php if (is_home() && ! is_front_page()) : ?>
                    <h1 class="entry-title"><?php single_post_title(); ?></h1>
                    <?php if (get_field('sub_header_title', get_option('page_for_posts'))) { ?>
                      <p class="sub-title"><?php the_field('sub_header_title', get_option('page_for_posts')); ?></p>
                    <?php } ?>
                    <?php elseif (is_404()) : ?>
                    <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'kenbury'); ?></h1>
                    <?php else : ?>
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    <?php if (get_field('sub_header_title')) { ?>
                      <p class="sub-title"><?php the_field('sub_header_title'); ?></p>
                    <?php } ?>
                    <?php endif; ?>
                
                </div>
            </div>
        </div>
    </div>
</header><!-- .entry-header -->