<!-- CONTACT US
================================================== -->
<section class="main-contact-us mb-14 mb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4 text-primary">
                    <?php echo get_field('contact_us_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('contact_us_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('contact_us_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center">

            <!-- Images -->
            <div class="col-12 col-xl-7 mb-10 mb-xl-0">
                <div class="row">
                    <div class="col-12 col-xl-6 main-contact-us__image text-xl-start">

                        <?php $contact_us_female_image = get_field('contact_us_female_image'); ?>
                        <?php if( !empty( $contact_us_female_image ) ): ?>
                            <img src="<?php echo esc_url($contact_us_female_image['url']); ?>" alt="<?php echo esc_attr($contact_us_female_image['alt']); ?>" >
                        <?php endif; ?>

                        <div class="bg-gray-800 text-gray-100 d-inline-block main-contact-us__image__text main-contact-us__image__text--female text-end">
                            <p class="m-0"><?php echo get_field('contact_us_female_image_text'); ?></p>
                        </div>

                    </div>
                    <div class="col-12 col-xl-6 main-contact-us__image mt-8 mt-xl-12">

                        <?php $contact_us_male_image = get_field('contact_us_male_image'); ?>
                        <?php if( !empty( $contact_us_male_image ) ): ?>
                            <img src="<?php echo esc_url($contact_us_male_image['url']); ?>" alt="<?php echo esc_attr($contact_us_female_image['alt']); ?>" >
                        <?php endif; ?>

                        <div class="bg-gray-800 text-gray-100 d-inline-block main-contact-us__image__text main-contact-us__image__text--male">
                            <p class="m-0"><?php echo get_field('contact_us_male_image_text'); ?></p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-12 col-xl-5">
                <?php echo do_shortcode(get_field('contact_us_contact_form_sortcode')); ?>
            </div>
        </div>
    </div>
</section>