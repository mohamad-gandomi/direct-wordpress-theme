<!-- FEATURES
================================================== -->
<section class="features mb-14 mb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4 text-warning">
                    <?php echo get_field('features_icon') ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('features_subtitle') ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('features_title') ?></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Features Tabs -->
            <div class="col-12 col-xl-6 mb-10 mb-xl-0">
                <div class="accordion direct-tabs" id="accordionExample">

                    <!-- Features Tabs Btns -->
                    <div class="direct-tabs__btns p-1 bg-gray-800 rounded-3 d-inline-block mb-12">
                        <?php if( have_rows('features_content') ): ?>
                            <?php $firstLoop = true; ?>
                            <?php $id = 1; ?>
                            <?php while( have_rows('features_content') ): the_row(); ?>

                                <?php if ($firstLoop): ?>
                                    <?php $firstLoop = false; ?>
                                    <button class="fs-2 btn btn-gray-900 text-white-500 px-5 py-3 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $id; ?>"><?php echo get_sub_field('tab_name') ?></button>
                                <?php else: ?>
                                    <button class="fs-2 btn btn-gray-900 text-white-500 px-5 py-3 rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id; ?>" aria-expanded="false" aria-controls="collapse<?php echo $id; ?>"><?php echo get_sub_field('tab_name') ?></button>
                                <?php endif; ?>

                                <?php $id++ ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Features Tab Content -->
                    <?php if( have_rows('features_content') ): ?>
                        <?php $firstLoop = true; ?>
                        <?php $id = 1; ?>
                        <?php while( have_rows('features_content') ): the_row(); ?>

                            <?php if ($firstLoop): ?>
                                <?php $firstLoop = false; ?>
                                <div class="direct-tabs__content accordion-item bg-black-500 border-0">
                                    <div id="collapse<?php echo $id; ?>" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <!-- Features Tabs Content -->
                                        <?php if( have_rows('tab_content') ): ?>
                                            <?php while( have_rows('tab_content') ): the_row(); ?>
                                                <div class="direct-tabs__content mb-7 user-select-none">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input mt-6" type="checkbox" role="switch" id="orderCheck">
                                                        <label class="form-check-label text-white-500 me-3" for="orderCheck">
                                                            <span class="font-pinar text-gray-100 display-5 d-block fw-800"><?php echo get_sub_field('title') ?></span>
                                                            <span class="text-gray-500"><?php echo get_sub_field('subtitle') ?></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="direct-tabs__content accordion-item bg-black-500 border-0">
                                    <div id="collapse<?php echo $id; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <!-- Features Tabs Content -->
                                        <?php if( have_rows('tab_content') ): ?>
                                            <?php while( have_rows('tab_content') ): the_row(); ?>
                                                <div class="direct-tabs__content mb-7 user-select-none">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input mt-6" type="checkbox" role="switch" id="orderCheck">
                                                        <label class="form-check-label text-white-500 me-3" for="orderCheck">
                                                            <span class="font-pinar text-gray-100 display-5 d-block fw-800"><?php echo get_sub_field('title') ?></span>
                                                            <span class="text-gray-500"><?php echo get_sub_field('subtitle') ?></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php $id++ ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="col-12 col-xl-6">
                <?php $features_image = get_field('features_image'); ?>
                <?php if( !empty( $features_image ) ): ?>
                    <img class="w-100" src="<?php echo esc_url($features_image['url']); ?>" alt="<?php echo esc_attr($features_image['alt']); ?>" >
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>