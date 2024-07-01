<?php
// Chargement des fichiers styles parent, enfant et swiper
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('foce-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('studio-koukaki-style', get_stylesheet_directory_uri() . '/sass/main.css', array('foce-style'), time(), 'all');
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Chargement des scripts du thème enfant
function studio_koukaki_enqueue_scripts() {
    wp_enqueue_script('banner', get_theme_file_uri() . '/assets/js/banner.js', array('jquery'), '1.0', true);
    wp_enqueue_script('swiper-element-bundle.min', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '9.2.0', true);
    wp_enqueue_script('order-custom-scripts', get_theme_file_uri('/assets/js/custom-scripts.js'), array('jquery'), '1.0.0', true);
    wp_enqueue_script('title-animation', get_theme_file_uri('/assets/js/title-animation.js'), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'studio_koukaki_enqueue_scripts');