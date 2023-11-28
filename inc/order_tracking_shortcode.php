<?php

function order_tracking_shortcode() {
    ob_start(); ?>

    <!-- Icon -->
    <div class="main-video__icon mb-5">
        <span class="icon-search-normal-bulk text-primary">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
            <span class="path5"></span>
            <span class="path6"></span>
            <span class="path7"></span>
            <span class="path8"></span>
        </span>
    </div>

    <!-- Divider -->
    <div class="divider bg-primary mb-6"></div>

    <form action="" method="post" class="main-contact-us__form order-tracking-form ms-auto">

        <?php wp_nonce_field('order_tracking_nonce', 'order_tracking_nonce_field'); ?>

        <div class="mb-10">
            <label for="order_id" class="form-label text-white-500">پیگیری سفارش</label>
            <input type="text" class="form-control bg-gray-800 border-0 py-5 px-4 rounded-3 mb-1 text-white-500" id="order_id" placeholder="۴۴ ۷۷ ۸۸" name="order_id" required>
            <span class="text-gray-400 fs-4">کد شماره سفارش خودتان را وارد کنید</span>
        </div>

        <button type="submit" class="btn btn-primary w-100 text-white-500 p-4 rounded-3">مشاهده وضعیت</button>

    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['order_id']) && isset($_POST['order_tracking_nonce_field'])) {
        if (!wp_verify_nonce($_POST['order_tracking_nonce_field'], 'order_tracking_nonce')) {
            die('Security check');
        }

        $order_id = absint($_POST['order_id']);
        $order = wc_get_order($order_id);

        if ($order) {
            echo '<p class="warning-info p-4 bg-primary-100 text-primary-600 fw-500 fs-4 w-100 rounded-3 mt-10"> سفارش شما در وضعیت ' . esc_html(wc_get_order_status_name($order->get_status())) . ' می باشد.</p>';
        } else {
            echo '<p class="warning-danger p-4 bg-danger-100 text-danger-600 fw-500 fs-4 w-100 rounded-3 mt-10">شماره سفارش نادرست است.</p>';
        }
    }
    ?>

    </form>

    <?php
    return ob_get_clean();
}
add_shortcode('order_tracking', 'order_tracking_shortcode');

?>