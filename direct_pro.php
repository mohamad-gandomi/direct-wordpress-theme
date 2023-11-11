<?php /* Template Name: Direct Pro */ ?>

<?php get_header(); ?>

<!-- Main
================================================== -->
<main>
    <?php require_once get_template_directory() . '/templates/product/product.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/video.php'; ?>
    <?php require_once get_template_directory() . '/templates/product/customers_club.php'; ?>
    <?php require_once get_template_directory() . '/templates/product/product_information.php'; ?>
    <?php require_once get_template_directory() . '/templates/product/product_tabs.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/counter.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/blog.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/contact_us.php'; ?>
    <?php //require_once get_template_directory() . '/templates/main_page/faqs.php'; ?>
    <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content(); 
        }
    }
    ?>
</main>

<?php get_footer(); ?>