<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

require get_stylesheet_directory() . '/inc/enlighten-child-functions.php';

add_image_size('home-services-image','400','',true);