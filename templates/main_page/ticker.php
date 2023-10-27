<!-- TICKER
================================================== -->
<section class="ticker align-items-center px-7 mb-14 mb-xl-16">
    <div class="row">
        <div class="ticker__title py-2 col-auto">
            <?php $ticker_icon = get_field('ticker_icon'); ?>
            <?php if( !empty( $ticker_icon ) ): ?>
                <img src="<?php echo esc_url($ticker_icon['url']); ?>" alt="<?php echo esc_attr($ticker_icon['alt']); ?>" >
            <?php endif; ?>
            <h2 class="font-pinar fs-4 fw-800 mx-6 d-inline"><?php echo get_field('ticker_title'); ?></h2>
        </div>
        <div class="ticker__carousel swiper me-9 col fw-500">
            <div class="swiper-wrapper">
                <?php if( have_rows('ticker_messages') ): ?>
                    <?php while( have_rows('ticker_messages') ): the_row(); ?>
                        <div class="swiper-slide font-pinar fs-4 w-auto d-flex align-items-center">
                            <p class="m-0"><?php echo get_sub_field('message'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>