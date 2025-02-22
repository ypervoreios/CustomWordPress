<?php
function customScripts() {
    wp_enqueue_style('bootstrap-style', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('font-awesome-style', get_theme_file_uri('/css/font-awesome.min.css'));
    wp_enqueue_script('bootstrap-script', get_theme_file_uri('/js/bootstrap.bundle.min.js'));
    wp_enqueue_style('chorinos-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'customScripts');

function customThemeSupport() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'customThemeSupport');

function my_custom_menus() {
    register_nav_menus([
        'primary-menu' => __('Primary Menu', 'textdomain'),
        'footer-menu' => __('Footer Menu', 'textdomain')
    ]);
}
add_action('after_setup_theme', 'my_custom_menus');
