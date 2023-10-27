<!-- CUSTOMERS
================================================== -->
<section class="customers mb-14 mb-xl-16">
    <div class="container">

        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4 text-primary">
                    <?php echo get_field('customers_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('customers_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('customers_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">


            <?php if( have_rows('customers_content') ): ?>
                <?php while( have_rows('customers_content') ): the_row(); ?>
                    <!-- Customer Cart -->
                    <div class="col-12 mb-5 mb-xxl-0 col-md-6 col-xxl-3">
                        <div class="customers__card p-7 bg-gray-800 rounded-6">

                            <!-- Customer Cart Ttile -->
                            <div class="customers__card__title d-flex align-items-center mb-6">
                                <div class="customers__card__icon-wrapper bg-gray-700 d-flex align-items-center justify-content-center rounded-2 ms-3 <?php echo get_sub_field("icon_color"); ?>">
                                    <?php echo get_sub_field('icon'); ?>
                                </div>
                                <div>
                                    <h3 class="display-5 fw-800 text-gray-100"><?php echo get_sub_field('title'); ?></h3>
                                    <span class="font-pinar text-gray-200"><?php echo get_sub_field('subtitle'); ?></span>
                                </div>
                            </div>

                            <!-- Customer Cart's Customers -->
                            <h4 class="fs-3 text-white-50 fw-600 mb-6"><?php echo get_sub_field('text'); ?></h4>
                            <div class="customers__card__tags">
                                <?php if( have_rows('customers_customers') ): ?>
                                    <?php while( have_rows('customers_customers') ): the_row(); ?>
                                        <button class="font-pinar fs-3 btn btn-gray-700 text-white-500 p-2 ms-1 mb-2 rounded-3"><?php echo get_sub_field('title'); ?></button>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>