<?php get_header(); ?>

<!-- MAIN
================================================== -->
<div class="container py-6 pb-xl-16 pt-xl-14">

    <div class="row gap-3">

        <main class='col single-post-content'>
                        <?php
            // Check if there are any posts
            if ( have_posts() ) :
                // Loop through posts
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <!-- Display post featured image -->
                    <div class="post-featured-image w-100 rounded-6 mb-6" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

                    <!-- Display post infos -->
                    <div class="row mb-9">

                        <!-- Display post title and date -->
                        <div class="col-12 col-xl-6">
                            <h1 class="display-5 fw-700 text-gray-800"><?php the_title(); ?></h1>
                            <p class="font-pinar fs-3 text-gray-500"><?php the_date(); ?></p>
                        </div>

                        <!-- Display post category, author and like... -->
                        <div class="col-12 col-xl-6">

                            <div class="post-info d-flex align-items-center justify-content-xl-end">
                                <?php
                                    $author_id = get_the_author_meta('ID');
                                    $author_image_url = get_avatar_url($author_id);
                                ?>
                                <!-- Author -->
                                <div class="bg-gray-300 rounded-3 py-2 px-3 d-inline-block ms-4 author">
                                    <img class="rounded-circle ms-1" src="<?php echo $author_image_url; ?>" alt="" width="24" height="24">
                                    <span class="text-gray-800 fs-4 fw-500"><?php the_author(); ?></span>
                                </div>
                                <?php
                                    $categories = get_the_category();
                                ?>
                                <!-- Category -->
                                <div class="bg-primary-200 rounded-3 py-2 px-3 d-inline-block ms-6 category">
                                    <span class="text-primary-500 fs-4 fw-500">
                                        <?php
                                        // Display post category names
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name ); // Display the first category
                                        }
                                        ?>
                                    </span>
                                </div>
                                <!-- like and comment -->
                                <?php
                                // Get the current post ID
                                $current_post_id = get_the_ID();

                                // Get the total like count for the current post from logged-in users
                                $liked_posts_logged_in = array();
                                if (is_user_logged_in()) {
                                    $user_id = get_current_user_id();
                                    $liked_posts_logged_in = get_user_meta($user_id, 'liked_posts', true);
                                }

                                // Get the total like count for the current post from logged-out users (from the cookie)
                                $liked_posts_cookie = isset($_COOKIE['liked_posts']) ? json_decode(stripslashes($_COOKIE['liked_posts']), true) : array();

                                // Combine liked posts from both logged-in and logged-out users
                                $all_liked_posts = array_merge($liked_posts_logged_in, $liked_posts_cookie);

                                // Calculate the total like count
                                $total_like_count = count(array_unique($all_liked_posts));

                                // Check if the current post is liked by the user (logged in or logged out)
                                $is_liked_by_user = in_array($current_post_id, $all_liked_posts);

                                // Determine the heart icon color based on like status
                                $heart_color_class = $is_liked_by_user ? 'text-danger-500' : 'text-black-200';
                                ?>
                                <div class="d-inline-block">
                                    <div class="likes d-inline-block ms-6">
                                        <span class="like-count"><?php echo $total_like_count; ?></span>
                                        <span class="display-5 <?php echo $heart_color_class; ?> icon-heart-bulk lh-lg post-like" data-post-id="<?php echo get_the_ID(); ?>" type="button">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                        </span>
                                    </div>
                                    <!-- <div class="likes d-inline-block">
                                        <span>0</span>
                                        <span class="display-5 text-black-200 icon-archive-bulk lh-lg">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                        </span>
                                    </div> -->
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <!-- Display post contents -->
                    <div class="row post-content-text mb-9">
                        <div class="col-12">
                            <?php the_content(); ?>
                        </div>
                    </div>


                    <!-- Navigation for previous and next posts -->
                    <div class="post-navigation d-flex justify-content-between mb-9">
                        <div class="previous-post fs-4 d-flex align-items-center font-pinar fw-700 text-primary">
                            <?php previous_post_link('<span class="icon-arrow-right-line ps-3 display-5"></span> %link'); ?>
                        </div>
                        <div class="next-post fs-4 d-flex align-items-center font-pinar fw-700 text-primary">
                            <?php next_post_link('%link <span class="icon-arrow-left-line pe-3 display-5"></span>'); ?>
                        </div>
                    </div>

                    <!-- Post tags -->
                    <?php
                    $tags = get_the_tags(); // Get the tags associated with the current post

                    if ($tags) { // Check if tags exist for the post
                        echo '<div class="post-tags mb-9 pb-9">'; // Start of tags container
                        echo '<h2 class="display-5 fw-700 p-0 mb-6">برچسب‌ ها</h2>';
                        foreach ($tags as $tag) {
                            // Display each tag as a link
                            echo '<button class="btn btn-primary-200 text-primary p-3 rounded-3 ms-3 mb-2">' . $tag->name . '</button>';
                        }
                        echo '</div>'; // End of tags container
                    }
                    ?>

                    <!-- Display comments section -->
                    <div class="comments-section">
                    <?php
                        // Check if comments are open or if there are any comments
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    ?>
                    </div>

                    <?php
                endwhile;
            endif;
            ?>
        </main>

        <aside class='col-12 col-xl-auto'>
            <?php if ( is_active_sidebar( 'blog-post-sidebar' ) ) : ?>
                <div id="blog-post-sidebar" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'blog-post-sidebar' ); ?>
                </div>
            <?php endif; ?>
        </aside>

    </div>
</div>

<?php get_footer(); ?>