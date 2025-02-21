<?php
function customScripts() {
    wp_enqueue_style('bootstrap-style', get_theme_file_uri('/css/bootstrap.css'));
    wp_enqueue_style('font-awesome-style', get_theme_file_uri('/css/font-awesome.min.css'));
    wp_enqueue_style('chorinos-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'customScripts');

function customThemeSupport() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'customThemeSupport');

function get_category_names() {
    // Get all categories
    $categories = get_categories();

    // Initialize an array to store category names
    $category_names = array();

    // Loop through the categories and store their names in the array
    foreach ($categories as $category) {
        $category_names[] = $category->name;
    }

    // Return the category names
    return $category_names;
}