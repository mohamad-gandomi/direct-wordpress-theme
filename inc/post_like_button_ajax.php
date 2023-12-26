<?php

add_action('wp_ajax_handle_post_like', 'handle_post_like');
add_action('wp_ajax_nopriv_handle_post_like', 'handle_post_like');

function handle_post_like() {
    $post_id = $_POST['post_id'];
    $user_id = get_current_user_id();

    // Check if the user is logged in
    if ($user_id !== 0) {
        // If the user is logged in, handle likes in user meta
        $liked_posts = get_user_meta($user_id, 'liked_posts', true);

        if (!$liked_posts) {
            $liked_posts = array();
        }

        $like_date = date('Y-m-d H:i:s');
        $like_status = '';

        if (in_array($post_id, $liked_posts)) {
            // Unlike the post
            $key = array_search($post_id, $liked_posts);
            unset($liked_posts[$key]);
            $like_status = 'unliked';
        } else {
            // Like the post
            $liked_posts[] = $post_id;
            $like_status = 'liked';
        }

        update_user_meta($user_id, 'liked_posts', $liked_posts);
    } else {
        // If the user is not logged in, handle likes in a cookie
        $liked_posts_cookie = isset($_COOKIE['liked_posts']) ? json_decode(stripslashes($_COOKIE['liked_posts']), true) : array();

        $like_date = date('Y-m-d H:i:s');
        $like_status = '';

        if (in_array($post_id, $liked_posts_cookie)) {
            // Unlike the post
            $key = array_search($post_id, $liked_posts_cookie);
            unset($liked_posts_cookie[$key]);
            $like_status = 'unliked';
        } else {
            // Like the post
            $liked_posts_cookie[] = $post_id;
            $like_status = 'liked';
        }

        // Update the cookie with liked posts
        setcookie('liked_posts', json_encode($liked_posts_cookie), time() + 3600 * 24 * 30, COOKIEPATH, COOKIE_DOMAIN);
    }

    // Get the total like count for the post
    $total_like_count = 0;
    if (!empty($liked_posts)) {
        $total_like_count = count($liked_posts);
    } elseif (!empty($liked_posts_cookie)) {
        $total_like_count = count($liked_posts_cookie);
    }

    // Return response
    $response = array(
        'status' => $like_status,
        'like_count' => $total_like_count,
    );

    wp_send_json($response);
    wp_die();
}