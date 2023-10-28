<!-- TESTIMONIALS
================================================== -->
<section class="testimonials mb-14 mb-xl-16">
    <div class="container-fluid">

        <!-- VIDEO CAROUSEL
        ================================================== -->
        <!-- Carousel main container -->
        <div class="video-carousel swiper mb-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <?php if( have_rows('testimonials_content_video') ): ?>
                    <?php while( have_rows('testimonials_content_video') ): the_row(); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if( !empty( $image ) ): ?>
                            <div class="swiper-slide">
                                <img role="button" class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- CUSTOMER LOGO CAROUSEL
        ================================================== -->
        <!-- Carousel main container -->
        <div class="customer-logo-carousel swiper mb-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php if( have_rows('testimonials_content_logos') ): ?>
                    <?php while( have_rows('testimonials_content_logos') ): the_row(); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if( !empty( $image ) ): ?>
                            <!-- Slide -->
                            <div class="swiper-slide w-auto">
                                <img role="button" class="w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- CUSTOMER TESTIMONIALS
        ================================================== -->

        <!-- Carousel main container -->
        <div class="customer-testimonials-carousel swiper mb-10">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php if( have_rows('testimonials_content_comments') ): ?>
                    <?php while( have_rows('testimonials_content_comments') ): the_row(); ?>
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="customer-testimonials-carousel__card bg-gray-800 rounded-3 p-6">
                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                    <div class="d-flex">
                                        <div class="ms-3 d-flex align-items-center">
                                            <?php $customer_avatar = get_sub_field('customer_avatar'); ?>
                                            <?php if( !empty( $customer_avatar ) ): ?>
                                                <img src="<?php echo esc_url($customer_avatar['url']); ?>" alt="<?php echo esc_attr($customer_avatar['alt']); ?>" >
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
</section>