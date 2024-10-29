<?php
function my_theme_enqueue_styles() {
    // Enqueue your custom CSS
    wp_enqueue_style('my-custom-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_setup() {
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');