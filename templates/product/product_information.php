<!-- PRODUCT INFORMATION
    ================================================== -->
<section class="product-information mb-14 mb-xl-16">
    <div class="container">
        <?php if( have_rows('product_information_content') ): $i = 0; ?>
            <?php while( have_rows('product_information_content') ): the_row(); $i++; ?>
                <div class="row <?php echo $i%2 == 0 ? 'flex-xl-row-reverse' : '' ?> align-items-center mb-12">
                    <div class="col-12 col-xl-6">
                        <div class="product-information__text <?php echo $i%2 == 0 ? 'me-xl-auto' : '' ?> ">
                            <h2 class="text-gray-50 display-4 fw-800 mb-5"><?php echo get_sub_field('title'); ?></h2>
                            <span class="font-pinar text-gray-200 d-block fw-500 mb-7"><?php echo get_sub_field('subtitle'); ?></span>
                            <p class="text-gray-200 d-block mb-7"><?php echo get_sub_field('text'); ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <?php $image = get_sub_field('image'); ?>
                        <?php if( !empty( $image ) ): ?>
                            <img class="w-100 product-information__img <?php echo $i%2 == 0 ? 'me-xl-auto' : '' ?> d-block" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>