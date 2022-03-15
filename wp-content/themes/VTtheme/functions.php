<?php
/**
 * Shape functions and definitions
 *
 * @package Shape
 * @since Shape 1.0
 */

function vt_load_css_and_js() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );
    wp_enqueue_style( 'contact-form-7-override', get_template_directory_uri().'/contact-form-7-override.css', '/wp-content/plugins/contact-form-7/includes/css/styles.css');
    wp_enqueue_style( 'lightbox-override', get_template_directory_uri().'/lightbox-override.css', '/wp-content/plugins/foobox-image-lightbox/free/css/foobox.free.min.css');
    wp_enqueue_script('page-app', get_template_directory_uri().'/inc/js/page-app.js','', '', true);
}
add_action( 'wp_enqueue_scripts', 'vt_load_css_and_js' );

/**
 * Register our sidebars and widgetized areas.
 *
 */

function VTtheme_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Header Widget',
        'id'            => 'header_widget_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'VTtheme_widgets_init' );

function https_no_ssl_verify($ssl_verify, $url = null) {
    return false;
}

add_filter('https_ssl_verify', 'https_no_ssl_verify', 10, 2);