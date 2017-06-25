<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function my_et_builder_post_types( $post_types ) {
    $post_types[] = 'am_event';
    //$post_types[] = 'ANOTHER_CPT_HERE';
     
    return $post_types;
}
add_filter( 'et_builder_post_types', 'my_et_builder_post_types' );

?>