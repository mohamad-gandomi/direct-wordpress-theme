<?php

// Hook into the form submission
add_action('init', 'add_product_to_cart');

function add_product_to_cart() {
    if (isset($_POST['product_id']) && isset($_POST['quantity']) && isset($_POST['color'])) {
        $product_id = sanitize_text_field($_POST['product_id']);
        $quantity = sanitize_text_field($_POST['quantity']);
        $color = $_POST['color'];

        // Add product to cart
        $cart_item_data = array('color' => $color);
        WC()->cart->add_to_cart($product_id, $quantity, 0, array(), $cart_item_data);
    }
}

?>