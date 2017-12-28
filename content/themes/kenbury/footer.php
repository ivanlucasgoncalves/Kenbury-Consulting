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
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                             width="438.536px" height="438.535px" viewBox="0 0 438.536 438.535"
                                             xml:space="preserve">
                                            <rect x="5.424" y="145.895" width="94.216" height="282.932"/>
                                              <path d="M408.842,171.739c-19.791-21.604-45.967-32.408-78.512-32.408c-11.991,0-22.891,1.475-32.695,4.427
                                              c-9.801,2.95-18.079,7.089-24.838,12.419c-6.755,5.33-12.135,10.278-16.129,14.844c-3.798,4.337-7.512,9.389-11.136,15.104
                                              v-40.232h-93.935l0.288,13.706c0.193,9.139,0.288,37.307,0.288,84.508c0,47.205-0.19,108.777-0.572,184.722h93.931V270.942
                                              c0-9.705,1.041-17.412,3.139-23.127c4-9.712,10.037-17.843,18.131-24.407c8.093-6.572,18.13-9.855,30.125-9.855
                                              c16.364,0,28.407,5.662,36.117,16.987c7.707,11.324,11.561,26.98,11.561,46.966V428.82h93.931V266.664
                                              C438.529,224.976,428.639,193.336,408.842,171.739z"/>
                                            <path d="M53.103,9.708c-15.796,0-28.595,4.619-38.4,13.848C4.899,32.787,0,44.441,0,58.529c0,13.891,4.758,25.505,14.275,34.829
                                            c9.514,9.325,22.078,13.99,37.685,13.99h0.571c15.99,0,28.887-4.661,38.688-13.99c9.801-9.324,14.606-20.934,14.417-34.829
                                            c-0.19-14.087-5.047-25.742-14.561-34.973C81.562,14.323,68.9,9.708,53.103,9.708z"/>
                                         </svg>
                                        </a>
                                        <a class="twitter" href="https://twitter.com/InfoKenbury" target="_blank">
                                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                                              <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
                                              c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
                                              c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
                                              c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
                                              c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
                                              c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
                                              c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/>
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
                <div class="row justify-content-md-between">
        <?php if (is_active_sidebar('menus-footer')) : ?>
        <?php dynamic_sidebar('menus-footer'); ?>
        <?php endif; ?>
                 <div class="col-md-6 col-lg-5">
                   <div class="twitterApp">
                     <div class="twitter-header">
                       <h4>Tweets <span>by</span> <a href="https://twitter.com/InfoKenbury" target="_blank">@InfoKenbury</a></h4>
                     </div>
                     <div class="tweet-body">
                       <div class="spinner tweetLoader">
                         <div class="double-bounce1"></div>
                         <div class="double-bounce2"></div>
                       </div>
                     </div>
                   </div>
                 </div>
                </div>
            </div>
        </div>
        <div class="site-info">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><?php printf(esc_html__('COPYRIGHT © 2017', 'kenbury')); ?>
                        <span class="sep"> | </span>
        <?php printf(esc_html__('All rights reserved......', 'kenbury')); ?></p>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
