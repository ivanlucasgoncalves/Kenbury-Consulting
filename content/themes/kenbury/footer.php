<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kenbury
 */

?>
        <?php // vars
        $hero = get_field('candidates_and_employers'); ?>
        
        <div id="ftr-choose" class="container">
            <div class="row justify-content-center no-gutters">
                <?php if (have_rows('candidates_and_employers', 'option')) : ?>
                <div class="col-md-6">
                  <div class="blk-inner ctn-left">
                    <?php // loop through the rows of data
                    while (have_rows('candidates_and_employers', 'option')) :
                          the_row(); ?>
                      <h2>Candidates</h2>
                      <div class="entry-ctn">
                          <p><?php the_sub_field('candidates_content'); ?></p>
                      </div>
                      <a href="<?php the_sub_field('can_learn_more_link'); ?>" class="btn-pad">Learn More</a>
                      <a href="#" class="btn-pad">View open opportunities</a>
                    <?php endwhile; ?>
                  </div>
                </div>
                <?php endif; ?>
                <?php if (have_rows('candidates_and_employers', 'option')) : ?>
                <div class="col-md-6">
                    <div class="blk-inner ctn-right">
                        <?php // loop through the rows of data
                        while (have_rows('candidates_and_employers', 'option')) :
                            the_row(); ?>
                          <h2>Employers</h2>
                          <div class="entry-ctn">
                              <p><?php the_sub_field('employer_content'); ?></p>
                          </div>
                          <a href="<?php the_sub_field('emp_learn_more_link'); ?>" class="btn-pad">Learn More</a>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="feature-bottom">
            <?php if (have_rows('get_in_touch', 'option')) : ?>
            <div id="get-in-touch" class="container">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="blk-getintouch">
                            <div class="row justify-content-md-between align-items-center">
                                <div class="col-md-4 ctn-left">
                                    <h2>Get in touch</h2>
                                    <p>We are always ready to help.</p>
                                </div>
                                <div class="col-md-5 ctn-right">
                                    <?php // loop through the rows of data
                                    while (have_rows('get_in_touch', 'option')) :
                                        the_row(); ?>
                                      <a href="tel:<?php the_sub_field('tel_number'); ?>"><?php the_sub_field('tel_number'); ?></a>
                                      <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a>
                                      <br/>
                                      <p><?php the_sub_field('address'); ?></p>
                                      <p>ABN – <?php the_sub_field('abn'); ?></p>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if (!is_home() && !is_single()) : ?>
                <?php $the_query = new WP_Query('posts_per_page=1'); ?>
                <?php while ($the_query -> have_posts()) :
                    $the_query -> the_post(); ?>

                    <article id="lat-blog-clmn" class="blk-blog footer-blk" <?php if (has_post_thumbnail()) : ?>
                    style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)" <?php 
                   endif; ?> >

                    <div class="container">
                        <div class="row justify-content-md-between align-items-center">
                            <div class="col-md-5">
                                <h4>Latest Blog Post</h4>
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="col-md-6 col-lg-5">
                                <div class="ctn-read">
            <?php the_content(__('')); //Adding more tag without using any default text?>
                                    <a href="<?php the_permalink() ?>" class="lnk-read">Read the article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
    
        </div>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="ctn-lnks-footer">
            <div class="container">
                <div class="row">
        <?php if (is_active_sidebar('menus-footer')) : ?>
        <?php dynamic_sidebar('menus-footer'); ?>
        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><?php printf(esc_html__('COPYRIGHT © 2017', 'kenbury')); ?>
                        <span class="sep"> | </span>
        <?php printf(esc_html__('All rights reserved.', 'kenbury')); ?></p>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
