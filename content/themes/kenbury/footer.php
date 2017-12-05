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
        
        <div id="ftr-choose" class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-md-6">
                    <div class="blk-inner ctn-left">
                        <h2>Candidates</h2>
                        <div class="entry-ctn">
                            <p>Seeking a new career move?<br/>
                            We utilise our market knowledge and recruitment expertise to help you 
                            make the transition.</p>
                        </div>
                        <a href="#" class="btn-pad">Learn More</a>
                        <a href="#" class="btn-pad">View open opportunities</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="blk-inner ctn-right">
                        <h2>Employers</h2>
                        <div class="entry-ctn">
                            <p>Seeking talent for your business?<br/>
                            We can help you finding the right talent to fit your company's culture.<br/>
                            Get in touch now!</p>
                        </div>
                        <a href="#" class="btn-pad">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-bottom">
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
                                    <a href="tel:1300793724">1300 793 724</a>
                                    <a href="mailto:info@kenbury.com.au">info@kenbury.com.au</a>
                                    <br/>
                                    <p>Level 9, 167 Eagle St, Brisbane</p>
                                    <p>ABN – 38 610 492 012</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!is_home()) : ?>
                <?php $the_query = new WP_Query('posts_per_page=1'); ?>
                <?php while ($the_query -> have_posts()) :
                    $the_query -> the_post(); ?>

                    <article id="lat-blog-clmn" class="blk-blog footer-blk" <?php if (has_post_thumbnail()) : ?>
                    style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)" <?php endif; ?> >

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
                        <p><?php printf(esc_html__('COPYRIGHT © 2017', 'starter-theme')); ?>
                        <span class="sep"> | </span>
        <?php printf(esc_html__('All rights reserved.', 'starter-theme')); ?></p>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
