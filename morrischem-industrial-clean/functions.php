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

// Disable Elementor dynamic footer locations completely for this theme
add_action('init', function() {
    remove_all_actions('elementor/theme/before_do_footer');
    remove_all_actions('elementor/theme/do_footer');
    remove_all_actions('elementor/theme/after_do_footer');
}, 999);
