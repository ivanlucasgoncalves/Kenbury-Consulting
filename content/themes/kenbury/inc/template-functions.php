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
