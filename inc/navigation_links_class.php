<?php


function custom_nav_menu_classes($classes, $item, $args) {
    // Add your custom classes here based on the menu item or other conditions
    // Example: Add a class based on the link text
    $classes[] = 'nav-link pe-0 ps-5 ps-xxl-8 text-light';

    return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_classes', 10, 3);