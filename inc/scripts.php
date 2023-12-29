<?php

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
    wp_enqueue_style('starter-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('starter-theme-style', 'rtl', 'replace');

    wp_enqueue_script('starter-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');
