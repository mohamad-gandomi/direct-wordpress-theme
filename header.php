<!doctype html>

<?php
// Retrieve the theme mode from the cookie
$themeMode = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<html <?php language_attributes(); ?> data-bs-theme="<?php echo $themeMode; ?>" >

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
    <nav class="navbar navbar-expand-xl navbar-dark pb-6 pt-5">
        <div class="container">

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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
            <div class="d-flex p-xl-0 lr-wrapper">
                <!-- Dark/Light Mode -->
                <a href="#!" id="mode-toggle" class="<?php echo 'light' == $themeMode ? 'icon-moon-bulk text-primary' : 'icon-sun-bulk text-secondary' ?> fs-1 ms-2 ms-xl-6 text-decoration-none align-items-center">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </a>

                <!-- Login/Register BTNs -->
                <a href="https://direct.ir/elementor/order-tracking/" type="button" class="btn text-light ms-6 pt-3 d-none d-xl-block">پیگیری سفارش</a>
                <a href="https://direct.ir/elementor/%d9%88%d8%b1%d9%88%d8%af/" type="button" class="btn px-6 py-3 rounded-3 login-register">ورود | ثبت نام</a>
            </div>


        </div>
    </nav>
</header>