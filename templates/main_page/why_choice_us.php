
<!-- WHY CHOICE US
================================================== -->
<section class="why-choose-us mb-14 mb-xl-16 position-relative">
    <div class="container">

        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4">
                    <?php echo get_field('why_choce_us_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('why_choce_us_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('why_choce_us_title'); ?></h2>
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="row">

            <?php if( have_rows('why_choce_us_content') ): ?>
                <?php while( have_rows('why_choce_us_content') ): the_row(); ?>
                    <!-- Card -->
                    <div class="col-12 col-xl-4 mb-8 mb-xl-0">
                        <div class="direct-card rounded-6 px-7 pb-7 pt-10">
                            <div class="d-flex mb-10">
                                <span class="font-pinar display-1 text-gray-700 fw-800 ms-6"><?php echo get_sub_field('number'); ?></span>
                                <div>
                                    <h3 class="fs-2 fw-800 text-gray-100 mb-4"><?php echo get_sub_field('title'); ?></h3>
                                    <p class="fs-4 mb-2 text-gray-200"><?php echo get_sub_field('subtitle'); ?></p>
                                </div>
                            </div>
                            <div>
                                <?php $why_choice_us_image = get_sub_field('image'); ?>
                                <?php if( !empty( $why_choice_us_image ) ): ?>
                                    <img class="w-100" src="<?php echo esc_url($why_choice_us_image['url']); ?>" alt="<?php echo esc_attr($why_choice_us_image['alt']); ?>" >
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="light bg-secondary position-absolute top-100 start-100 translate-middle"></div>
</section>