<?php /* Template Name: Direct Plus */ ?>

<?php get_header(); ?>

<!-- Main
================================================== -->
<main>
    <?php require_once get_template_directory() . '/templates/product/product.php'; ?>
    <?php require_once get_template_directory() . '/templates/product/product_information.php'; ?>
    <?php require_once get_template_directory() . '/templates/product/product_tabs.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/counter.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/blog.php'; ?>
    <?php require_once get_template_directory() . '/templates/main_page/contact_us.php'; ?>
    <?php //require_once get_template_directory() . '/templates/main_page/faqs.php'; ?>
</main>

<?php get_footer(); ?>