<?php

function wpdocs_theme_name_scripts() {

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array());
	wp_enqueue_style( 'custom.css', get_template_directory_uri() . '/assets/css/custom.css', array());
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts');