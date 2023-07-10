<?php
function wtd_setup()
{   // Language
    load_theme_textdomain('wtd');

    // Title
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // register_nav_menu('main-menu', 'Main Menu');
    // register_nav_menu('footer-menu', 'Footer Menu');

    // Register Menu
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

// Register Sidebar
function wtd_widgets()
{
    register_sidebar(array(
        'name' => __('Main Sidebar', 'wtd'),
        'id' => 'sidebar-1',
        'description' => __('Sidebar Widget Area', 'wtd'),
        'before_widget' => '<div class="about-menu">',
        'after_widget' => '</div>',
        'before_title' => '<h4">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wtd_widgets');
