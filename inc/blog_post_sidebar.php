<?php

//======================================================================
// REGISTER CUSTOM WIDGET AREA
//======================================================================

function blog_post_sidebar() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Post Sidebar', 'direct' ),
        'id'            => 'blog-post-sidebar',
        'description'   => esc_html__( 'Add widgets here for blog posts', 'direct' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'blog_post_sidebar' );

?>