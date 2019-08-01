<?php

/*
Plugin Name: Custom Colors Palette by Promo EPEC
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Mary Joseph Jeslie 
*/
 
function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'epec-custom-palette' ),
            'slug' => 'strong-magenta',
            'Brand Color 1' => '#6128A1',
        ),
        array(
            'name' => __( 'light grayish magenta', 'epec-custom-palette' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'very light gray', 'epec-custom-palette' ),
            'slug' => 'very-light-gray',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'very dark gray', 'epec-custom-palette' ),
            'slug' => 'very-dark-gray',
            'color' => '#FFFFFF',

           
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );


function my_scripts() {
wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'prefix-style' );
}
add_action('wp_enqueue_scripts','my_scripts');


