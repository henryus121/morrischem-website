<?php

function morrischem_enqueue_styles() {
    wp_enqueue_style('morrischem-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'morrischem_enqueue_styles');

function morrischem_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'morrischem'),
    ));
}
add_action('after_setup_theme', 'morrischem_theme_setup');

// Suppress legacy plugin footer injections
add_action('wp_footer', function() {
    unset($GLOBALS['wp_widget_factory']);
}, 0);
