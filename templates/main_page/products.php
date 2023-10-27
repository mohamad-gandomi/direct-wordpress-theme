<!-- PRODUCTS
================================================== -->
<section class="direct-products mb-14 mb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4">
                    <?php echo get_field('products_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('products_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('products_title'); ?></h2>
                </div>
            </div>
        </div>

        <!-- Products Cards -->
        <div class="row">

            <?php if( have_rows('products_content') ): ?>
                <?php while( have_rows('products_content') ): the_row(); ?>
                    <!-- Product Card -->
                    <div class="col-12 col-xxl-6 mb-8 mb-xxl-0">
                        <div class="direct-card d-flex flex-column flex-md-row bg-gray-800 rounded-6 p-6">
                            <div class="mx-auto mb-7 mb-md-0 ms-md-9 d-flex align-items-center">
                                <?php $product_image = get_sub_field('image'); ?>
                                <?php if( !empty( $product_image ) ): ?>
                                    <img class="p-2" src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_image['alt']); ?>" >
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3 class="fs-2 text-white-50 mb-4"><?php echo get_sub_field("title"); ?></h3>
                                <p class="fs-4 mb-7 text-gray-200"><?php echo get_sub_field("text"); ?></p>
                                <ul class="fs-4 mb-7 text-gray-50">

                                <?php if( have_rows('list') ): ?>
                                    <?php while( have_rows('list') ): the_row(); ?>
                                        <li class="mb-5 d-flex align-items-center">
                                            <span class="icon-tick-bulk fs-3 text-success ms-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </span>
                                            <span><?php echo get_sub_field('list_item'); ?></span>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                                </ul>
                                <button type="button" class="btn btn-primary w-100 text-white-500 p-3 fw-500 rounded-3">جزئیات بیشتر</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>




        </div>
    </div>
</section>