<?php 

function montheme_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('custom-logo');
}
function montheme_title($title) {
    return 'Enargeia' . $title;
}
function montheme_title_separator() {
    return '|';
}
function register_my_menu(){
    register_nav_menu( 'main-menu', 'Menu principal' );
}
function custom_enqueue_scripts() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array(), null, true);
    
}
// wp_enqueue_style( 'some-style', get_stylesheet_directory_uri() . '/style.css', array(), time());


add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
add_action( 'after_setup_theme', 'register_my_menu' );
add_action('after_setup_theme', 'montheme_supports');
add_filter('wp_title', 'montheme_title');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
?>