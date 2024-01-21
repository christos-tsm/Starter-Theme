<?php

/**
 * Theme ACF Options
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

/**
 * Remove block styles
 */
function n22_remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'n22_remove_wp_block_library_css', 100);

/**
 * Disallow greek characters on files upload
 */
function disallow_greek_chars_in_filenames($file) {
    if (preg_match('/[Α-ω]/', $file['name'])) {
        $file['error'] = 'Error: Greek characters in file name are not allowed.';
    }
    return $file;
}
add_filter('wp_handle_upload_prefilter', 'disallow_greek_chars_in_filenames');
