<?php get_header(); ?>

<!-- MAIN
================================================== -->
<div class="container py-6 py-xl-16">

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
                                <div class="d-inline-block">
                                    <div class="likes d-inline-block ms-6">
                                        <span>0</span>
                                        <span class="display-5 text-black-200 icon-heart-bulk lh-lg">
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
                                    <div class="likes d-inline-block">
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
                                    </div>
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