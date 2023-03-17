<?php
function wtd_setup()
{
    load_theme_textdomain('wtd');
    // register_nav_menu('main-menu', 'Main Menu');
    // register_nav_menu('footer-menu', 'Footer Menu');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'wtd'),
        // 'footer-menu' => __('Footer Menu', 'wtd')
    ));
}
add_action('after_setup_theme', 'wtd_setup');

function wtd_scripts()
{
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wtd_scripts');
