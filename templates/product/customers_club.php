<!-- CUSTOMER CLUB
================================================== -->
<section class="customer-club mb-14 mb-xl-16 pb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4">
                    <span class=" <?php echo get_field('customers_club_icon'); ?> <?php echo get_field('customers_club_icon_color'); ?> ">
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

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('customers_club_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('customers_club_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Features Tabs -->
            <div class="col-12 mb-10 mb-xl-0">

                <div class="accordion direct-tabs" id="accordionExampletop">

                    <div class="direct-tabs__btns p-1 bg-gray-800 rounded-3 d-inline-block mb-12 d-inline-flex flex-wrap">
                        <?php if( have_rows('customers_club_content') ): ?>
                            <?php $firstLoop = true; ?>
                            <?php $id = 1; ?>
                            <?php while( have_rows('customers_club_content') ): the_row(); ?>

                                <?php if ($firstLoop): ?>
                                    <?php $firstLoop = false; ?>
                                    <button class="fs-2  btn btn-gray-900 text-white-500 px-5 py-3 rounded-3 d-flex align-items-center ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetop<?php echo $id; ?>" aria-expanded="true" aria-controls="collapsetop<?php echo $id; ?>">
                                        <span class="icon-category-line display-6 ms-5"></span>
                                        <?php echo get_sub_field('tab_title'); ?>
                                    </button>
                                <?php else: ?>
                                    <button class="fs-2  btn btn-gray-900 text-white-500 px-5 py-3 rounded-3 d-flex align-items-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetop<?php echo $id; ?>" aria-expanded="false" aria-controls="collapsetop<?php echo $id; ?>">
                                        <span class="icon-category-line display-6 ms-5"></span>
                                        <?php echo get_sub_field('tab_title'); ?>
                                    </button>
                                <?php endif; ?>

                                <?php $id++ ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <?php if( have_rows('customers_club_content') ): ?>
                        <?php $firstLoop = true; ?>
                        <?php $id = 1; ?>
                        <?php while( have_rows('customers_club_content') ): the_row(); ?>

                            <?php if ($firstLoop): ?>
                                <?php $firstLoop = false; ?>
                                    <div class="direct-tabs__content accordion-item bg-black-500 border-0">
                                        <div id="collapsetop<?php echo $id; ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExampletop">
                                            <div class="row align-items-center flex-xl-row-reverse">
                                                <div class="col-12 col-xl-6">
                                                    <div class="product-information__text me-xl-auto">
                                                        <h2 class="text-gray-50 display-4 fw-800 mb-5"><?php echo get_sub_field('title'); ?></h2>
                                                        <span class="font-pinar text-gray-200 d-block fw-500 mb-7"><?php echo get_sub_field('subtitle'); ?></span>
                                                        <p class="text-gray-200 d-block mb-7"><?php echo get_sub_field('text'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <?php $image = get_sub_field('image'); ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <img class="w-100 product-information__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php else: ?>
                                    <div class="direct-tabs__content accordion-item bg-black-500 border-0">
                                        <div id="collapsetop<?php echo $id; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExampletop">
                                            <div class="row align-items-center flex-xl-row-reverse">
                                                <div class="col-12 col-xl-6">
                                                    <div class="product-information__text me-xl-auto">
                                                        <h2 class="text-gray-50 display-4 fw-800 mb-5"><?php echo get_sub_field('title'); ?></h2>
                                                        <span class="font-pinar text-gray-200 d-block fw-500 mb-7"><?php echo get_sub_field('subtitle'); ?></span>
                                                        <p class="text-gray-200 d-block mb-7"><?php echo get_sub_field('text'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <?php $image = get_sub_field('image'); ?>
                                                    <?php if( !empty( $image ) ): ?>
                                                        <img class="w-100 product-information__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php endif; ?>

                            <?php $id++ ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>