<?php

function vertebra_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'vertebra', get_template_directory_uri() . '/css/vertebra.css' );
    wp_enqueue_script( 'simpleslider', get_template_directory_uri() . '/js/simpleslider.min.js', array(), true);
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/8447267318.js', array(), true);
}

add_action( 'wp_enqueue_scripts', 'vertebra_scripts' );

function vertebra_fonts() {
    wp_register_style('Barlow', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&display=swap');
	wp_enqueue_style( 'Barlow');
}

add_action('wp_print_styles', 'vertebra_fonts');