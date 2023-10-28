<!-- FAQs
================================================== -->
<section class="direct-faqs mb-14 mb-xl-16">
    <div class="container">
        <!-- Section Ttile -->
        <div class="row sectoin-title mb-10 mb-xl-12">
            <div class="col d-flex align-items-center">

                <!-- Section Title Icon -->
                <div class="section-title__icon ms-4 text-success">
                    <?php echo get_field('faq_icon'); ?>
                </div>

                <!-- Section Title Text -->
                <div class="section-title__text">
                    <p class="font-pinar fw-500 fs-2 mb-2 text-gray-200"><?php echo get_field('faq_subtitle'); ?></p>
                    <h2 class="display-4 fw-800 text-gray-100"><?php echo get_field('faq_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush px-0" id="accordionFlushExample">
                    <?php if( have_rows('faq_content') ): $i = 0; ?>
                        <?php while( have_rows('faq_content') ): the_row(); $i++; ?>
                            <!-- Faq Item -->
                            <div class="accordion-item bg-black-500 mb-9">
                                <h2 class="accordion-header border-0" id="flush-headingOne-header">
                                    <button class="accordion-button collapsed bg-black-500 text-gray-50 fs-2 fw-bold shadow-none pb-8 pt-0 px-0 text-end" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                                        <?php echo get_sub_field('question'); ?>
                                    </button>
                                </h2>
                                <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse text-light bg-black-500 fs-4 border-0" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pb-6 pt-0 px-0"><?php echo get_sub_field('answere'); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>