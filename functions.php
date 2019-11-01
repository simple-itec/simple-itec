<?php

// Including stylesheet and script files
function load_scripts() {
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Main Configuration Function
function simpleitec_config() {

    // Many features for theme: Posts Formats/Post Thumbnails/Custom Background/Custom Header
    // Custom Logo/Feed Links/HTML5/Title Tag/Customize Selective Refresh Widgets/Multisite
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);

}
add_action('after_setup_theme','simpleitec_config',0);