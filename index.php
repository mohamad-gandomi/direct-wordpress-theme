<?php get_header(); ?>

<!-- MAIN
================================================== -->
<main>
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