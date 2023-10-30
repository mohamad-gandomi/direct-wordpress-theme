<!-- BLOG
================================================== -->
<section class="blog mb-14 mb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4 text-warning">
                    <?php echo get_field('blog_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('blog_subtitel'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('blog_title'); ?></h2>
                </div>
            </div>
        </div>

        <!-- Blog Posts -->
        <div class="blog row">

        <?php
            // Define the custom query to retrieve posts
            $args = array(
                'post_type' => 'post',  // You can specify the post type here (e.g., 'post', 'page', 'custom_post_type')
                'posts_per_page' => 3, // To retrieve all posts, use -1, or specify the number of posts you want to display.
            );

            $custom_query = new WP_Query($args);

            // Check if there are posts to display
            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();

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
                        <!-- Blog Post -->
                        <div class="col-12 mb-6 mb-xxl-0 col-xl-6 col-xxl-4">
                            <div class="blog__card rounded-6 bg-gray-800">
                                <div class="blog__card__image">
                                    <img class="w-100" src="<?php echo $post_thumbnail; ?>" alt="<?php echo $post_title; ?>">
                                    <div class="blog__card__image__icons">
                                        <span class="icon-heart-bulk text-black-200 display-4 ms-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </span>
                                        <span class="icon-archive-bulk text-black-200 display-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </span>
                                    </div>
                                    <div class="blog__card__image__info d-flex align-items-center">
                                        <div class="blog__card__image__category p-3 text-secondary ms-3 d-flex align-items-center rounded-2">
                                            <span class="display-5 ms-3 icon-folder-open-line"></span>
                                            <span>
                                                <?php
                                                if (isset($post_categories) && !empty($post_categories)) {
                                                    foreach ($post_categories as $category) {
                                                        echo $category->name;
                                                    }
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="blog__card__image__comments-no p-3 text-gray-50 ms-3 d-flex align-items-center rounded-2">
                                            <span class="display-5 ms-3 icon-message-text-line"></span>
                                            <span><?php echo $post_comments_count ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__card__text p-6">
                                    <h3 class="font-yekanbakh text-gray-50 display-5 fw-600 mb-2"><a class="text-decoration-none text-gray-50" href="<?php echo $psot_permalink; ?>"><?php echo $post_title; ?></a></h3>
                                    <p class="text-gray-200 fs-4 mb-6"><?php echo $excerpt_result; ?></p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <img class="ms-3 rounded-circle" src="<?php echo $post_author_avatar_url; ?>" alt="<?php echo $post_author; ?> profile image">
                                            <span class="text-white-500"><?php echo $post_author; ?></span>
                                        </div>
                                        <div class="blog__card__text__date d-flex align-items-center">
                                            <span class="icon-calendar-bulk text-gray-500 display-4 ms-3">
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
                    <?php

                endwhile;

                // Restore the global post data
                wp_reset_postdata();

            else :
                echo 'No posts found';
            endif;
        ?>


        </div>
    </div>
</section>