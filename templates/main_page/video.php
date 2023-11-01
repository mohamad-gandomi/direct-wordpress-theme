<!-- VIDEO
================================================== -->
<section class="main-video mb-14 mb-xl-16">
    <div class="container">
        <div class="row align-items-center">

            <!-- Title -->
            <div class="col-12 col-xl-6 mb-10 mb-xl-0">

                <!-- Icon -->
                <div class="main-video__icon mb-7">
                    <?php echo get_field('video_icon'); ?>
                </div>

                <!-- Divider -->
                <div class="divider bg-primary mb-9"></div>

                <!-- Text -->
                <div class="main-video__text">
                    <h2 class="display-4 fw-800 text-gray-100 mb-6"><?php echo get_field('video_title'); ?></h2>
                    <p class="fs-4 mb-0 text-gray-300 fw-500"><?php echo get_field('video_text'); ?></p>
                </div>

            </div>

            <!-- Video -->
            <div class="col-12 col-xl-6">
                <?php $video_file = get_field('video_file'); ?>
                <?php $video_poster = get_field('video_poster'); ?>

                <?php if (!empty($video_file)): ?>
                    <div class="video-container rounded-5 bg-gray-800">
                        <video class="w-100 rounded-5" controls poster="<?php echo esc_url($video_poster['url']); ?>">
                            <source src="<?php echo esc_url($video_file['url']); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
