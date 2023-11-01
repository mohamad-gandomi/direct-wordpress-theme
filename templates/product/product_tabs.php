<!-- PRODUCT TABS
================================================== -->
<section class="product-information mb-14 mb-xl-16">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="accordion direct-product-tabs" id="accordionExample">

                    <!-- Features Tabs Btns -->
                    <div class="row mx-2 direct-product-tabs__btns py-3 bg-gray-800 rounded-3 mb-12 justify-content-around">

                        <?php if(get_field('tab1_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab1_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if(get_field('tab2_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab2_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>
                        
                        <?php if(get_field('tab3_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab3_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if(get_field('tab4_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab4_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if(get_field('tab5_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab5_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>

                        <?php if(get_field('tab6_tab_name')): ?>
                            <div class="col-6 col-md-4 col-xxl-2">
                                <button class="fs-2 w-100 d-flex align-items-center justify-content-center btn btn-gray-900 text-white-500 px-2 px-xl-4 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span class="icon-category-line ms-2 fs-3"></span>
                                    <?php echo get_field('tab6_tab_name'); ?>
                                </button>
                            </div>
                        <?php endif; ?>

                    </div>

                    <?php if(get_field('tab1_tab_name')): ?>
                        <div class="direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="row align-items-center">
                                    <div class="col-12 col-xl-6">
                                        <div class="product-information__text">
                                            <h2 class="text-gray-50 display-4 fw-800 mb-7"><?php echo get_field('tab1_tab_title'); ?></h2>
                                            <ul class="fs-4 mb-7 text-gray-50">
                                                <?php if( have_rows('tab1_tab_list_content') ): ?>
                                                    <?php while( have_rows('tab1_tab_list_content') ): the_row(); ?>

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
                                            <p class="text-gray-200 d-block mb-7"><?php echo get_field('tab1_tab_text'); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <?php $tab1_tab_image = get_field('tab1_tab_image'); ?>
                                        <?php if( !empty( $tab1_tab_image ) ): ?>
                                            <img class="w-100 product-information__img me-xl-auto d-block" src="<?php echo esc_url($tab1_tab_image['url']); ?>" alt="<?php echo esc_attr($tab1_tab_image['alt']); ?>" >
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('tab2_tab_name')): ?>
                        <div class="direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="row align-items-center">
                                    <div class="col-12 col-xl-6">
                                        <div class="product-information__text">
                                            <h2 class="text-gray-50 display-4 fw-800 mb-7"><?php echo get_field('tab2_tab_title'); ?></h2>
                                            <ul class="fs-4 mb-7 text-gray-50">

                                                <?php if( have_rows('tab2_tab_list_content') ): ?>
                                                    <?php while( have_rows('tab2_tab_list_content') ): the_row(); ?>

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
                                            <p class="text-gray-200 d-block mb-7"><?php echo get_field('tab2_tab_text'); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <?php $tab2_tab_image = get_field('tab2_tab_image'); ?>
                                        <?php if( !empty( $tab2_tab_image ) ): ?>
                                            <img class="w-100 product-information__img me-xl-auto d-block" src="<?php echo esc_url($tab2_tab_image['url']); ?>" alt="<?php echo esc_attr($tab2_tab_image['alt']); ?>" >
                                        <?php endif; ?>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('tab3_tab_name')): ?>
                        <div class="direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <ul class="direct-product-tabs__content__fetures rounded-6">
                                    <?php if( have_rows('tab3_tab_content') ): ?>
                                        <?php while( have_rows('tab3_tab_content') ): the_row(); ?>
                                            <li class="d-xxl-flex justify-content-between align-items-center p-7">
                                                <span class="icon-category-bulk display-3 text-primary ms-3 mb-4 mb-xxl-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </span>
                                                <h5 class="font-yekanbakh text-gray-100 display-6 fw-800 ms-6 mb-4 mb-xxl-0"><?php echo get_sub_field('title'); ?></h5>
                                                <p class="text-gray-200 ms-6 mb-0 mb-4 mb-xxl-0"><?php echo get_sub_field('text'); ?></p>
                                                <button class="btn btn-warning-800 text-warning-300 p-3 rounded-4 d-flex align-items-center">
                                                    <span class="icon-video-circle-bulk ms-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </span>
                                                    <span>ویدئو افزونه</span>
                                                </button>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('tab4_tab_name')): ?>
                        <div class=" direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="row align-items-center">
                                    <div class="col-12 col-xl-6">
                                        <div class="product-information__text">
                                            <h2 class="text-gray-50 display-4 fw-800 mb-7"><?php echo get_field('tab4_tab_title'); ?></h2>
                                            <ul class="fs-4 mb-7 text-gray-50">

                                                <?php if( have_rows('tab4_tab_list_content') ): ?>
                                                    <?php while( have_rows('tab4_tab_list_content') ): the_row(); ?>

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
                                            <p class="text-gray-200 d-block mb-7"><?php echo get_field('tab4_tab_text'); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <?php $video_file = get_field('tab4_tab_video_file'); ?>
                                        <?php $video_poster = get_field('tab4_tab_video_poster'); ?>

                                        <?php if (!empty($video_file)): ?>
                                            <div class="video-container rounded-5 bg-gray-800">
                                                <video class="w-100 rounded-5" controls poster="<?php echo esc_url($video_poster['url']); ?>">
                                                    <source src="<?php echo esc_url($video_file['url']); ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        <?php endif; ?>                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('tab5_tab_name')): ?>
                        <div class="direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <!-- Carousel main container -->
                                <div class="customer-testimonials-carousel-product swiper mb-10">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">

                                        <?php if( have_rows('tab5_tab_content') ): ?>
                                            <?php while( have_rows('tab5_tab_content') ): the_row(); ?>

                                            <div class="swiper-slide">
                                                <div class="customer-testimonials-carousel__card bg-gray-800 rounded-3 p-6">
                                                    <div class="mb-3 d-flex align-items-center justify-content-between">
                                                        <div class="d-flex">
                                                            <div class="ms-3 d-flex align-items-center">
                                                                <?php $avatar = get_sub_field('avatar'); ?>
                                                                <?php if( !empty( $avatar ) ): ?>
                                                                    <img src="<?php echo esc_url($avatar['url']); ?>" alt="<?php echo esc_attr($avatar['alt']); ?>" >
                                                                <?php endif; ?>
                                                            </div>
                                                            <div>
                                                                <h4 class="text-gray-50 display-5 fw-500 mb-1"><?php echo get_sub_field('title'); ?></h4>
                                                                <span class="font-pinar text-gray-300 fs-4"><?php echo get_sub_field('subtitle'); ?></span>
                                                            </div>
                                                        </div>
                                                        <span class="quote-mark text-gray-600">”</span>
                                                    </div>
                                                    <p class="text-gray-400 mb-0"><?php echo get_sub_field('text'); ?></p>
                                                </div>
                                            </div>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('tab6_tab_name')): ?>
                        <div class="direct-product-tabs__content accordion-item bg-black-500 border-0">
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="row direct-faqs">
                                    <div class="col-12">
                                        <div class="accordion accordion-flush px-0" id="accordionFlushExample0">
                                            <?php if( have_rows('tab6_tab_content') ): $i = 0; ?>
                                                <?php while( have_rows('tab6_tab_content') ): the_row(); $i++; ?>
                                                    <!-- Faq Item -->
                                                    <div class="accordion-item bg-black-500 mb-9">
                                                        <h2 class="accordion-header border-0" id="flush-headingOne-header">
                                                            <button class="accordion-button collapsed bg-black-500 text-gray-50 fs-2 fw-bold shadow-none pb-8 pt-0 px-0 text-end" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsep<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapsep<?php echo $i; ?>">
                                                                <?php echo get_sub_field('title'); ?>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapsep<?php echo $i; ?>" class="accordion-collapse collapse text-light bg-black-500 fs-4 border-0" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body pb-6 pt-0 px-0"><?php echo get_sub_field('text'); ?></div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>