<?php

/**
 * Child Style & Script
 */
function child_enqueue_scripts() {
  wp_enqueue_style( 
    'childstyle', 
    get_stylesheet_directory_uri() . '/style.css'  
  );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts', 11);

/**
 * Unregister Post Types
 */
function child_unregister_post_types(){
    unregister_post_type('portfolio_page');    
    unregister_post_type('testimonials');    
    unregister_post_type('masonry_gallery'); 
    unregister_post_type('carousels');    
    unregister_post_type('slides');    
}
add_action( 'init', 'child_unregister_post_types', 11 );

/**
 * Unregister Sidebars
 */
function child_unregister_sidebars(){
    unregister_sidebar( 'sidebar_page' );
    unregister_sidebar( 'header_left' );
    unregister_sidebar( 'header_right' );
    unregister_sidebar( 'header_left_from_logo' );
    unregister_sidebar( 'header_right_from_logo' );
    unregister_sidebar( 'header_bottom_right' );
    unregister_sidebar( 'header_bottom_center' );
    unregister_sidebar( 'sidearea' );
    unregister_sidebar( 'fullscreen_menu_area_widget' );
    unregister_sidebar( 'vertical_menu_area' );
    unregister_sidebar( 'footer_column_1' );
    unregister_sidebar( 'footer_column_2' );
    unregister_sidebar( 'footer_column_3' );
    unregister_sidebar( 'footer_column_4' );
    unregister_sidebar( 'footer_text' );
    unregister_sidebar( 'footer_text_left' );
    unregister_sidebar( 'footer_text_right' );
    unregister_sidebar( 'header_fixed_right' );
    unregister_sidebar( 'woocommerce_dropdown' );
}
add_action( 'widgets_init', 'child_unregister_sidebars', 11 );
