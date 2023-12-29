<?php

function wpdocs_theme_name_scripts() {

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array());
	wp_enqueue_style( 'custom.css', get_template_directory_uri() . '/assets/css/custom.css', array());
	wp_enqueue_style( 'aos.css', get_template_directory_uri() . '/assets/css/aos.css', array());
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
	wp_localize_script('custom.js', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts');