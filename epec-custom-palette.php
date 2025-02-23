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
            'name' => __( 'Brand Color 1', 'epec-custom-palette' ),
            'slug' => 'brand-color-1',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'Brand Color 2', 'epec-custom-palette' ),
            'slug' => 'brand-color-2',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'Very Dark Gray ', 'epec-custom-palette' ),
            'slug' => 'very-dark-Gray ',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'White', 'epec-custom-palette' ),
            'slug' => 'white',
            'color' => '#FFFFFF',

            'name' => __( 'Very Dark Grey', 'epec-custom-palette' )
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );


function my_scripts() {
wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
wp_enqueue_style( 'prefix-style' );
}
add_action('wp_enqueue_scripts','my_scripts');


