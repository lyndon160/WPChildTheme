<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// Add Montserrat font
function load_montserrat_font() {
            wp_register_style('montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
            wp_enqueue_style( 'montserrat');
        }
    
    add_action('init', 'load_montserrat_font');

function footer_widgets_init() { 
register_sidebar( array( 'name' => 'Footer widget area', 
'id' => 'footer_sidebar', 
'before_widget' => '<div>', 
'after_widget' => '</div>', 
'before_title' => '<h2 class="widget-title">', 
'after_title' => '</h2>', ) ); 
} 
add_action( 'widgets_init', 'footer_widgets_init' ); 



?>
