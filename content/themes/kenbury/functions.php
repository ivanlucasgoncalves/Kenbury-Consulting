<?php
/**
 * Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kenbury
 */

if (! function_exists('kenbury_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function kenbury_setup()
    {
        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Starter Theme, use a find and replace
        * to change 'starter-theme' to the name of your theme in all the template files.
        */
        load_theme_textdomain('starter-theme', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support('title-tag');

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
            'main-menu' => esc_html__('Main Menu', 'kenbury'),
            'menu-home' => esc_html__('Menu Home', 'kenbury')
            )
        );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support(
            'html5',
            array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'kenbury_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kenbury_widgets_init()
{
    register_sidebar(
        array(
        'name'          => esc_html__('Sidebar', 'starter-theme'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'starter-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
        'name'          => esc_html__('Footer Menus', 'starter-theme'),
        'id'            => 'menus-footer',
        'description'   => esc_html__('Add menus here.', 'starter-theme'),
        'before_widget' => '<div class="col-md-2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        )
    );
}
add_action('widgets_init', 'kenbury_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function kenbury_scripts()
{
    
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_deregister_script('wp-embed');
        // Remove the REST API endpoint.
        remove_action('rest_api_init', 'wp_oembed_register_route');
        // Turn off oEmbed auto discovery.
        // Don't filter oEmbed results.
        remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
        // Remove oEmbed discovery links.
        remove_action('wp_head', 'wp_oembed_add_discovery_links');
        // Remove oEmbed-specific JavaScript from the front-end and back-end.
        remove_action('wp_head', 'wp_oembed_add_host_js');
        // Google CDN
        wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, null, true);
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', false, null, true);
        // Add livereload for local access | DO NOT CHANGE
        //wp_enqueue_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
        if (is_front_page() || is_home()) {
              wp_enqueue_script('jquery-unslider', get_template_directory_uri() . '/assets/js/unslider/jquery.unslider.min.js', false, null, true);
              wp_enqueue_script('unslider', get_template_directory_uri() . '/assets/js/unslider/unslider.js', false, null, true);
        }
        $imgurl = array( 'templateUrl' => get_stylesheet_directory_uri() ); // Using in JS for catching the path site
        wp_enqueue_script('script-min-js', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), filemtime(get_stylesheet_directory().'/assets/js/script.min.js'), true);
        wp_localize_script('script-min-js', 'pathUrl', $imgurl); //Localize Script
    }
    
    wp_enqueue_style('kenbury-style', get_stylesheet_uri());
    
    wp_enqueue_style('style-min-css', get_template_directory_uri() . '/assets/css/style.min.css', false, filemtime(get_stylesheet_directory() . '/assets/css/style.min.css'));
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'kenbury_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
