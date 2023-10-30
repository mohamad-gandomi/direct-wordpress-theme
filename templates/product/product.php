<!-- PRODUCT
    ================================================== -->
<section class="product mt-0 mb-14 mb-xl-16 mt-xl-14">
    <div class="container">
        <div class="row">
            <!-- Product Gallery -->
            <div class="col-12 col-xl-6">
                <div class="product__gallery my-10">
                    <!-- Product Image -->
                    <div class="product__gallery__image d-inline-block">
                        <?php $product_image = get_field('product_image'); ?>
                        <?php if( !empty( $product_image ) ): ?>
                            <img class="w-100" src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_image['alt']); ?>" >
                        <?php endif; ?>

                        <div class="product__gallery__image__blur bg-<?php echo get_field('product_color'); ?>"></div>
                        <span class="icon-box-2-bulk text-<?php echo get_field('product_color'); ?> display-1 position-absolute bottom-0 end-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Product Info -->
            <div class="product__info col-12 col-xl-6">

                <!-- Product Title -->
                <div class="product__info__title mb-7">
                    <div class="d-flex align-items-center mb-5">
                        <span class="<?php echo get_field('product_icon'); ?> <?php echo get_field('product_icon_color'); ?> display-1 ms-5">
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
                        <h1 class="display-5 text-gray-50 mb-0 fw-800"><?php echo get_field('product_title'); ?></h1>
                    </div>
                    <span class="font-pinar fw-500 text-gray-200"><?php echo get_field('product_subtitle'); ?></span>
                </div>

                <!-- Product Description -->
                <div class="product__info__description text-gray-50 fw-light lh-lg mb-7">
                    <p><?php echo get_field('product_description'); ?></p>
                </div>

                <!-- Product Variables -->
                <div class="product__info__variables d-flex align-items-center mb-7">
                    <?php if( have_rows('product_variables') ): ?>
                        <?php while( have_rows('product_variables') ): the_row(); ?>

                            <button class="btn btn-gray-700 text-white-500 rounded-3 p-3 d-flex ms-3">
                                <span class="product__info__variables__colorIndicator <?php echo get_sub_field('color'); ?>"></span>
                                <span><?php echo get_sub_field('title'); ?></span>
                            </button>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- Product Form -->
                <div class="product__info__form align-items-center mb-7">

                    <!-- Product Price -->
                    <div class="product__info__form__price mb-7">
                        <span class="font-pinar text-success-500 display-4 fw-800"><?php echo get_field('product_price'); ?></span>
                    </div>

                    <!-- Product Count -->
                    <div class="product__info__form__count mb-7">
                        <div class="quantity-input bg-gray-800 rounded-6 d-inline-block px-3">
                            <button class="font-poppins quantity-button bg-gray-500 rounded-circle text-light quantity-button minus">-</button>
                            <input class="display-5 text-light text-center" type="text" id="quantity" name="quantity" value="1">
                            <button class="font-poppins quantity-button bg-gray-500 rounded-circle text-light quantity-button plus">+</button>
                        </div>
                    </div>

                    <button id="product_add_to_cart" type="button" class="btn btn-primary w-100 text-white-500 p-4 rounded-4 w-50 fw-500">ثبت خرید</button>

                </div>

                <!-- Product Bonus -->
                <div class="product__info__bonus d-flex flex-wrap">

                    <?php if( have_rows('product_bonus') ): ?>
                        <?php while( have_rows('product_bonus') ): the_row(); ?>

                            <div class="d-flex align-items-center mb-3 ms-6">
                                <span class="<?php echo get_sub_field('icon'); ?> <?php echo get_sub_field('icon_color'); ?> display-4 ms-2">
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
                                <span class="text-gray-50 fw-light fs-4"><?php echo get_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>