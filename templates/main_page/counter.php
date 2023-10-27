<!-- COUNTER
================================================== -->
<section class="counter mb-14 mb-xl-16">
    <div class="container">

        <!-- Title -->
        <div class="row">
            <div class="col-12 text-center mb-12">
                <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('counter_title') ?></h2>
            </div>
        </div>

        <!-- Counter -->
        <div class="row">

                <!-- Counter Item -->
                <?php if( have_rows('counter_content') ): ?>
                    <?php while( have_rows('counter_content') ): the_row(); ?>
                        <div class="col-12 col-xl-4 mb-10 mb-xl-0 d-flex align-items-center justify-content-center">
                            <!-- Section Title Icon -->
                            <div class="section-title__icon ms-6 d-flex align-items-center text-gray-500">
                                <?php echo get_sub_field('icon'); ?>
                            </div>

                            <!-- Section Title Text -->
                            <div class="section-title__text">
                                <h4 class="font-pinar display-1 fw-500 text-primary mb-6 fw-600"><?php echo get_sub_field('title'); ?></h4>
                                <p class="fs-3 mb-2 text-gray-200 fw-600"><?php echo get_sub_field('subtitle'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
</section>