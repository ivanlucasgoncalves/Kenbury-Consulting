<?php
/**
 * Template part for displaying header on Home Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kenbury
 */
 
?>

<header class="home-header">
    <?php
    // Template part for default top header
    include 'top-headers.php'; ?>
  <div class="menu-homepage d-none d-lg-flex">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-6">
          <nav id="nav-home" class="main-home">
                <?php wp_nav_menu(
                    array(
                    'theme_location' => 'menu-home',
                    )
                );?>
          </nav><!-- #site-navigation -->
        </div>
      </div>
    </div>
  </div>
  <div id="slider">
    <ul>
        <?php // SlideShow
        if (have_rows('slideshow')) : ?>
        <?php // loop through the rows of data
        while (have_rows('slideshow')) :
            the_row();?>
        <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'large'); ?>
        <li style="background-image:url(<?php echo $image[0]; ?>)">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="div-slider">
                  <h2><?php echo esc_html(the_sub_field('title')); ?></h2>
                  <p><?php echo esc_html(the_sub_field('content')); ?></p>
                </div>
              </div>              
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php else : // no rows found
        endif; ?>
    </ul>
  </div>
  <div class="bottom-header d-none d-md-block">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="ins-btheader">
            <h4>Services</h4>
            <h3>For Employers</h3>
            <p>We are all about building partnerships for success.</p>
            <a href="/employers" class="btn-pad">Learn more</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="ins-btheader">
            <h4>Services</h4>
            <h3>For Candidates</h3>
            <p>We are all about building partnerships for success.</p>
            <a href="/candidates" class="btn-pad">Learn more</a>
            <a href="#" class="btn-pad">View open opportunities</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header><!-- #masthead -->
