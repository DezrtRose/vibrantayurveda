<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_script( 'enlighten-custom-js');
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri(). '/js/custom.js');
}


function enlighten_child_theme_setup() {
    add_image_size('home-service-image','425','340',true);
}
add_action( 'after_setup_theme', 'enlighten_child_theme_setup' );

require get_stylesheet_directory() . '/inc/enlighten-child-functions.php';
