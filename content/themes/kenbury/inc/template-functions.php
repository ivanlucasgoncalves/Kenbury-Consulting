<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param  array $classes Classes for the body element.
 * @return array
 */
function starter_theme_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (! is_singular()) {
        $classes[] = 'hfeed';
    }
    if (is_page('Contact')) {
        $classes[] = 'contact';
    }

    return $classes;
}
add_filter('body_class', 'starter_theme_body_classes');

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function starter_theme_pingback_header()
{
    if (is_singular() && pings_open()) {
        echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
    }
}
add_action('wp_head', 'starter_theme_pingback_header');
 
function add_linebreak_shortcode()
{
    return '<br />';
}
add_shortcode('br', 'add_linebreak_shortcode');

/**
 * Disable some default WordPress actions
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Function to select Headers
 */
function header_part($slug, $params = array())
{
    assert(!empty($slug));

    // Get the template file path
    $template = get_template_directory() . "/template-parts/header/$slug.php";
    if (!file_exists($template)) { // Fallback to default
        $template = get_template_directory() . '/template-parts/header/default.php';
    }

    // Build
    include $template;
}

/*
** Custom Options Tab
*/
if (function_exists('acf_add_options_page')) {
    // add parent
    acf_add_options_page(
        array(
        'page_title'     => 'Theme General Settings',
        'menu_title'     => 'Theme Settings'
        )
    );
}

/*
** Pre Loader
*/
function kenbury_appendhtml()
{
    if (is_front_page()) {
        ?>
        <div class="loader-wrapper">
          <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
          </div>
        </div>
        <?php
    }
}
add_action('after_body_open_tag', 'kenbury_appendhtml');

/*
** CSS admin area for ACF inputs
*/
function my_acf_admin_head() {
    $style = '';
    $style = '.post-type-page .acf-image-uploader { max-width:50%; }';
	  $style .= '.post-type-page .acf-field-text .acf-input-wrap input { padding: 3px 8px;font-size: 1.7em;line-height: 100%;height: 1.7em;width: 100%;outline: 0;margin: 0 0 3px;background-color: #fff; }';
    echo '<style type="text/css">'.$style.'</style>';
}
add_action('acf/input/admin_head', 'my_acf_admin_head');
