<?php
function customScripts() {
    wp_enqueue_style('bootstrap-style', get_theme_file_uri('/css/bootstrap.css'));
    //wp_enqueue_style('font-awesome-style', get_theme_file_uri('/css/font-awesome.min.css'));
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
        'top-menu-left' => __('Top Menu Left', 'textdomain'),
        'top-menu-right' => __('Top Menu Right', 'textdomain'),
        'footer-menu' => __('Footer Menu', 'textdomain')
    ]);
}
add_action('after_setup_theme', 'my_custom_menus');


function event_post_type() {
    $args = array(
        'labels'      => array(
            'name'          => __( 'Events', ''),
            'singular_name' => __( 'Event', ''),
            'add_new_item' => __('New Event',''),
            'edit_item' => __('Edit Event',''),
            'new_item' => __('New Event',''),
            'view_item' => __('View Event',''),
            'not_found' => __('No Events found',''),
            'not_found_in_trash' => __('No Events found in Trash',''),
            'parent_item_colon' => '',
            'search_items' => __('Search Events',''),
            'all_items' => __('All Events',''),
            'archives' => __('Events Archives',''),
            'insert_into_item' => __('Insert into Event',''),
            'uploaded_to_this_item' => __('Uploaded to this Event',''),
            'filter_items_list' => __('Filter Events list',''),
            'items_list_navigation' => __('Events list navigation',''),
            'items_list' => __('Events list','')
        ),
        'menu_icon'=> 'dashicons-calendar',
        'public'      => true,
        'has_archive' => true,
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'rewrite'     => array( 'slug' => 'events' ),
        'show_in_rest' => true, // Enables Gutenberg support
    );
    register_post_type( 'event', $args );
}
add_action( 'init', 'event_post_type' );

function custom_event_taxonomy() {
    $args = array(
        'labels' => array(
            'name'              => __( 'Event Categories' ),
            'singular_name'     => __( 'Event Category' ),
            'search_items'      => __( 'Search Event Categories' ),
            'all_items'         => __( 'All Event Categories' ),
            'edit_item'         => __( 'Edit Event Category' ),
            'update_item'       => __( 'Update Event Category' ),
            'add_new_item'      => __( 'Add New Event Category' ),
            'new_item_name'     => __( 'New Event Category Name' ),
            'menu_name'         => __( 'Event Categories' ),
        ),
        'hierarchical'  => true, // Works like default post categories
        'public'        => true,
        'show_ui'       => true,
        'supports'      => array( 'title', 'thumbnail', '', '',),
        'show_in_rest'  => true, // Enable Gutenberg support
        'rewrite'       => array( 'slug' => 'event-category' ),
    );
    register_taxonomy( 'event_category', array( 'event' ), $args );
}
add_action( 'init', 'custom_event_taxonomy' );

function custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'custom_logo_setup');