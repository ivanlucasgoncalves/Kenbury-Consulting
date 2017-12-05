<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Kenbury
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">

    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', get_post_type());
    endwhile; // End of the loop.
    ?>

        </div>
    </div>
</div>

<?php
get_footer();
