<!-- FOOTER
================================================== -->
<footer>
    test
    <!-- Top Footer -->
    <div class="top-footer bg-gray-800 py-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 mb-10 mb-xl-0">
                    <h3 class="display-4 text-gray-100 fw-800 mb-6"><?php echo get_field('top_footer_right_title', 'option'); ?></h3>
                    <p class="text-gray-300 mb-0"><?php echo get_field('top_footer_right_text', 'option'); ?></p>
                </div>
                <div class="col-12 col-xl-6 d-flex">
                    <div class="d-inline-flex flex-column text-end me-xl-auto">
                        <h3 class="display-4 text-gray-100 fw-800 mb-6"><?php echo get_field('top_footer_left_title', 'option'); ?></h3>
                        <p class="text-gray-300 mb-0"><?php echo get_field('top_footer_left_text', 'option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row py-10">
                <div class="col-12 col-xl-4 mb-10 mb-xl-0">
                    <h4 class="text-gray-100 display-5 fw-800 mb-9"><?php echo get_field('first_column_title', 'option'); ?></h4>
                    <ul>
                        <?php if( have_rows('first_column_list', 'option') ): ?>
                            <?php while( have_rows('first_column_list', 'option') ): the_row(); ?>
                                <li class="mb-6">
                                    <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-gray-100"><?php echo get_sub_field('title'); ?></a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-12 col-xl-4 mb-10 mb-xl-0">
                    <h4 class="text-gray-100 display-5 fw-800 mb-9"><?php echo get_field('second_column_title', 'option'); ?></h4>
                    <ul>
                        <?php if( have_rows('second_column_list', 'option') ): ?>
                            <?php while( have_rows('second_column_list', 'option') ): the_row(); ?>
                                <li class="mb-6">
                                    <a href="<?php echo get_sub_field('link'); ?>" class="text-decoration-none text-gray-100"><?php echo get_sub_field('title'); ?></a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-12 col-xl-4 mb-10 mb-xl-0">
                    <h4 class="text-gray-100 display-5 fw-800 mb-9"><?php echo get_field('third_column_title', 'option'); ?></h4>
                    <div class="row mb-8">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <span class="icon-call-line text-primary display-3 ms-3"></span>
                                <span class="text-gray-100"><?php echo get_field('third_column_phone', 'option'); ?></span>
                            </div>
                            <span class="text-gray-500 fs-4">منتظر تماس شما هستیم</span>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-3">
                                <span class="icon-sms-line text-primary display-3 ms-3"></span>
                                <span class=" font-poppins text-gray-100 fs-4"><?php echo get_field('third_column_email', 'option'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-8">
                        <div class="col-12">
                            <div class="d-flex align-items-center mb-3">
                                <span class="icon-location-line text-primary display-3 ms-3"></span>
                                <span class="text-gray-100 fs-4"><?php echo get_field('third_column_address', 'option'); ?></span>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-gray-100 fs-2 fw-800 mb-10"><?php echo get_field('social_footer_title', 'option'); ?></h4>
                    <div class="d-flex">

                        <?php if( have_rows('social_footer_icons', 'option') ): ?>
                            <?php while( have_rows('social_footer_icons', 'option') ): the_row(); ?>
                                <a href="<?php echo get_sub_field('link') ?>" class="<?php echo get_sub_field('icon') ?> text-gray-300 display-1 text-decoration-none ms-7">
                                    <div class="path1"></div>
                                    <div class="path2"></div>
                                    <div class="path3"></div>
                                    <div class="path4"></div>
                                    <div class="path5"></div>
                                    <div class="path6"></div>
                                    <div class="path7"></div>
                                    <div class="path8"></div>
                                    <div class="path9"></div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sub Footer -->
    <div class="sub-footer bg-gray-800 py-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 mb-10 mb-xl-0">
                    
                    <!-- Dark Logo -->
                    <?php $subfooter_dark_logo = get_field('subfooter_dark_logo', 'option'); ?>
                    <?php if( !empty( $subfooter_dark_logo ) ): ?>
                        <img class="mb-9 dark-show" src="<?php echo esc_url($subfooter_dark_logo['url']); ?>" alt="<?php echo esc_attr($subfooter_dark_logo['alt']); ?>" >
                    <?php endif; ?>

                    <!-- Light Logo -->
                    <?php $subfooter_light_logo = get_field('subfooter_light_logo', 'option'); ?>
                    <?php if( !empty( $subfooter_light_logo ) ): ?>
                        <img class="mb-9 light-show" src="<?php echo esc_url($subfooter_light_logo['url']); ?>" alt="<?php echo esc_attr($subfooter_light_logo['alt']); ?>" >
                    <?php endif; ?>

                    <p class="text-gray-100 mb-0"><?php echo get_field('subfooter_text', 'option'); ?></p>

                </div>
                <div class="col-12 col-xl-6 d-flex">
                    <div class="d-inline-flex align-items-center text-end me-xl-auto">
                        <div class="bg-gray-900 p-6 rounded-3 ms-5">
                            <?php $subfooter_enamad = get_field('subfooter_enamad', 'option'); ?>
                            <?php if( !empty( $subfooter_enamad ) ): ?>
                                <img class="w-100" src="<?php echo esc_url($subfooter_enamad['url']); ?>" alt="<?php echo esc_attr($subfooter_enamad['alt']); ?>" >
                            <?php endif; ?>
                        </div>
                        <div class="bg-gray-900 p-6 rounded-3">
                            <?php $subfooter_samandehi = get_field('subfooter_samandehi', 'option'); ?>
                            <?php if( !empty( $subfooter_samandehi ) ): ?>
                                <img class="w-100" src="<?php echo esc_url($subfooter_samandehi['url']); ?>" alt="<?php echo esc_attr($subfooter_samandehi['alt']); ?>" >
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign -->
    <div class="sign bg-gray-800 py-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-gray-200 mb-0"><?php echo get_field('sign_text', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>