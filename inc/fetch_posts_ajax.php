<?php
// AJAX function to fetch posts by category ID
function fetch_posts_by_category_id() {
    $categoryId = $_POST['category_id'];
    $posts_per_page = isset($_POST['posts_per_page']) ? $_POST['posts_per_page'] : 9;
    $offset = isset($_POST['offset']) ? $_POST['offset'] : 0;
    $searchQuery = isset($_POST['search_query']) ? $_POST['search_query'] : '';

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'cat' => $categoryId,
        's' => $searchQuery // Search query parameter
    );

    $posts = new WP_Query($args);

    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            // Display posts as desired
            $post_title = get_the_title();
            $post_excerpt = get_the_excerpt();
            $excerpt = substr($post_excerpt, 0, 200);
            $excerpt_result = substr($excerpt, 0, strrpos($excerpt, ' '));
            $post_author = get_the_author();
            $post_date = get_the_date();
            $post_categories = get_the_category();
            $post_thumbnail = (has_post_thumbnail()) ? get_the_post_thumbnail_url() : '';
            $post_comments_count = get_comments_number();
            $post_author_id = get_the_author_meta('ID');
            $post_author_avatar_url = get_avatar_url($post_author_id, array('size' => 32));
            $psot_permalink = get_post_permalink();
            ?>
            <article class="bta-cart bg-gray-800 rounded-6 overflow-hidden mb-6">
                <div class="row">

                    <div class="bta-cart__image col-12 col-md-4 position-relative top-0 start-0" style="background-image: url('<?php echo $post_thumbnail; ?>');">
                        <div class="bta-cart__image__top">
                            <span class="icon-heart-bulk text-black-200 display-4 ms-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </span>
                            <span class="icon-saved-bulk text-black-200 display-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </span>
                        </div>
                        <div class="d-flex align-items-center bta-cart__image__bottom">
                            <div class="p-3 text-secondary me-3 d-flex align-items-center rounded-2 bta-cart__image__bottom__category">
                                <span class="display-5 ms-2 icon-archive-line"></span>
                                <span class="fs-4">
                                    <?php
                                    if (isset($post_categories) && !empty($post_categories)) {
                                        foreach ($post_categories as $category) {
                                            echo $category->name;
                                            break; 
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="p-3 text-gray-50 me-3 d-flex align-items-center rounded-2 bta-cart__image__bottom__comments">
                                <span class="display-5 ms-2 icon-message-text-line"></span>
                                <span class="fs-4"><?php echo $post_comments_count ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">

                        <div class="py-7 px-2 px-xl-6">
                            <h3 class="display-4 text-gray-50 fw-700 mb-3"><?php echo $post_title; ?></h3>
                            <p class="fs-4 text-gray-200"><?php echo $post_excerpt; ?></p>
                            <div class="d-flex align-items-center">
                                <div class="ms-2 ms-xl-8 bta-cart__author">
                                    <img class="ms-1 ms-xl-3 rounded-circle" src="<?php echo $post_author_avatar_url; ?>" alt="author profile image">
                                    <span class="text-white-500"><?php echo $post_author; ?></span>
                                </div>
                                <div class="d-flex align-items-center bta-cart__date">
                                    <span class="icon-calendar-bulk text-gray-500 display-4 ms-1 ms-xl-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                    </span>
                                    <span class="text-gray-500"><?php echo $post_date; ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </article>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }

    wp_die();
}
add_action('wp_ajax_fetch_posts_by_category_id', 'fetch_posts_by_category_id');
add_action('wp_ajax_nopriv_fetch_posts_by_category_id', 'fetch_posts_by_category_id');