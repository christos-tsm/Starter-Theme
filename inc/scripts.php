<?php

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
    /** Styles */
    wp_enqueue_style('starter-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    /** Scripts */
    wp_enqueue_script('remove-greek-uppercase-accents', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');
