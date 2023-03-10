<?php

// Add script ans stylesheets
function inhabitent_scripts() {
    $file_ver = date("ymdGis", filemtime( get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('inhabitent_style', get_stylesheet_uri(), array(), $file_ver);
    wp_enqueue_script('inhabitent_js', get_template_directory_uri().'/js/inhabitent.js', array('jquery'), 1.0, true);
}

add_action('wp_enqueue_scripts', 'inhabitent_scripts');

// Add theme Support
function inhabitent_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus( array(
        'primary' => 'Primary Menu'
    ));
}

add_action('init', 'inhabitent_theme_setup');
?>