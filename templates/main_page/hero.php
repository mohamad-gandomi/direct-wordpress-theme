<!-- HERO
================================================== -->
<section class="main-welcome py-14 py-xl-16 text-light position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 text-center text-xl-end">
                <div class="main-welcome__title mx-auto mx-xl-0">
                    <div class="mb-9">
                        <h1 class="fw-800 mb-7"><?php echo get_field( "hero_title" ); ?></h1>
                        <p class="text-gray-200"><?php echo get_field( "hero_text" ); ?></p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-6 mb-5 mb-xl-0">
                            <?php $hero_avatar_images = get_field('hero_avatar_images'); ?>
                            <?php if( !empty( $hero_avatar_images ) ): ?>
                                <img src="<?php echo esc_url($hero_avatar_images['url']); ?>" alt="<?php echo esc_attr($hero_avatar_images['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-xl-6 align-self-center position-relative">
                            <a href="#" class="text-secondary text-decoration-none">درخواست مشاوره</a>
                            <?php $hero_arrow_light = get_field('hero_arrow_light'); ?>
                            <?php if( !empty( $hero_arrow_light ) ): ?>
                                <img id="curveArrow" class="position-absolute d-none d-xl-block" src="<?php echo esc_url($hero_arrow_light['url']); ?>" alt="<?php echo esc_attr($hero_arrow_light['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-none d-xl-block">
                <?php $hero_image = get_field('hero_image'); ?>
                <?php if( !empty( $hero_image ) ): ?>
                    <img class="w-100 mt-5" src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="light bg-primary position-absolute top-50 start-0 translate-middle"></div>
</section>