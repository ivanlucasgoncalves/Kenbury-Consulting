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
                                      <div class="blks-social-media">
                                        <a class="linkedin" href="https://www.linkedin.com/company/kenbury-consulting/" target="_blank">
                                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;" xml:space="preserve">
                                          <path d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123   C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,
                                          35.454,24.126,58.102,24.126   h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225   C438.532,59.576,430.49,40.204,414.41,24.123z M133.618,367.157H67.666V169.016h65.952V367.157z M127.626,132.332   c-6.851,6.567-15.893,
                                          9.851-27.124,9.851h-0.288c-10.848,0-19.648-3.284-26.407-9.851c-6.76-6.567-10.138-14.703-10.138-24.41   c0-9.897,3.476-18.083,10.421-24.556c6.95-6.471,15.942-9.708,26.98-9.708c11.039,0,19.89,3.237,26.553,9.708   c6.661,6.473,10.088,14.659,10.277,24.556C137.899,117.625,134.477,125.761,127.626,132.332z M370.873,367.157h-65.952v-105.92   c0-29.879-11.036-44.823-33.116-44.823c-8.374,0-15.42,2.331-21.128,6.995c-5.715,4.661-9.996,10.324-12.847,16.991   c-1.335,3.422-1.999,8.75-1.999,15.981v110.775h-65.952c0.571-119.529,0.571-185.579,0-198.142h65.952v27.974   c13.867-21.681,33.558-32.544,59.101-32.544c22.84,0,41.21,7.52,55.104,22.554c13.895,15.037,20.841,37.214,20.841,66.519v113.64   H370.873z" fill="#FFFFFF"/>
                                         </svg>
                                        </a>
                                        <a class="twitter" href="https://twitter.com/InfoKenbury" target="_blank">
                                         <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                          <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z     M400.35,186.15c-2.55,117.3-76.5,198.9-188.7,204C165.75,392.7,132.6,377.4,102,359.55c33.15,5.101,76.5-7.649,99.45-28.05    c-33.15-2.55-53.55-20.4-63.75-48.45c10.2,2.55,20.4,0,28.05,0c-30.6-10.2-51-28.05-53.55-68.85c7.65,5.1,17.85,7.65,28.05,7.65     c-22.95-12.75-38.25-61.2-20.4-91.8c33.15,35.7,73.95,66.3,140.25,71.4c-17.85-71.4,79.051-109.65,117.301-61.2    c17.85-2.55,30.6-10.2,43.35-15.3c-5.1,17.85-15.3,28.05-28.05,38.25c12.75-2.55,25.5-5.1,35.7-10.2    C425.85,165.75,413.1,175.95,400.35,186.15z" fill="#FFFFFF"/>
                                         </svg>
                                        </a>
                                      </div>
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
