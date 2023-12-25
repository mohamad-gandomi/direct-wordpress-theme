<?php

//======================================================================
// Redirect to Checkout After Adding Product to Cart
//======================================================================

add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout($url) {
    $url = wc_get_checkout_url(); // Get the checkout URL
    return $url;
}
?>