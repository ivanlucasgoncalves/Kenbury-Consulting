<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kenbury
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('after_body_open_tag'); ?>

<div id="page" class="site">
  
    <?php if (is_front_page()) : ?>
        <?php
        // Template header home page on template-parts/header/front-page.php
        header_part('front-page'); ?>
    <?php else : ?>
    <?php
        // Template header default inner pages on template-parts/header/default.php
        header_part('default'); ?>
    <?php endif; ?>
  
  <div id="content" class="site-content">
