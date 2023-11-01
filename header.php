<!doctype html>
<html <?php language_attributes(); ?> data-bs-theme="light">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAVBAR
================================================== -->
<header>
    <nav class="navbar navbar-expand-xl navbar-dark py-6">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand mx-0" href="<?php echo site_url(); ?>">

                <!-- Dark Logo -->
                <?php $dark_logo = get_field('dark_logo', 'option'); ?>
                <?php if( !empty( $dark_logo ) ): ?>
                    <img class="dark-show" src="<?php echo esc_url($dark_logo['url']); ?>" alt="<?php echo esc_attr($dark_logo['alt']); ?>" >
                <?php endif; ?>

                <!-- Light Logo -->
                <?php $light_logo = get_field('light_logo', 'option'); ?>
                <?php if( !empty( $light_logo ) ): ?>
                    <img class="light-show" src="<?php echo esc_url($light_logo['url']); ?>" alt="<?php echo esc_attr($light_logo['alt']); ?>" >
                <?php endif; ?>

            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'primary_menu',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav ms-auto pe-0 py-7 py-xl-0 pe-xl-7',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ));
            ?>


            <!-- Login/Register & Dark/Light -->
            <div class="d-flex py-7 p-xl-0">
                <!-- Dark/Light Mode -->
                <a href="#" id="mode-toggle" class="icon-moon-bulk text-primary fs-1 ms-6 text-decoration-none align-items-center">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </a>

                <!-- Login/Register BTNs -->
                <button type="button" class="btn text-light ms-6">ورود</button>
                <button type="button" class="btn btn-primary px-6 py-3 rounded-3">ثبت نام</button>
            </div>

        </div>
    </nav>
</header>