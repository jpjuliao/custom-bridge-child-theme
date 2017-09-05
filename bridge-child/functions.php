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
 * Unregister Bridge Post Types
 */

add_action('init', 'child_unregister_bridge_post_types',10);
function child_unregister_bridge_post_types(){
    unregister_post_type('portfolio_page');    
    unregister_post_type('testimonials');    
    unregister_post_type('masonry_gallery'); 
    unregister_post_type('carousels');    
    unregister_post_type('slides');    
}
