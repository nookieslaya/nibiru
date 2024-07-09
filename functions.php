<?php

/**
 * Theme Functions
 *
 * @package Nibiru
 */

if (!defined('NIBIRU_DIR_PATH')) {
    define('NIBIRU_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('NIBIRU_DIR_URI')) {
    define('NIBIRU_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


require_once NIBIRU_DIR_PATH . '/inc/helpers/autoloader.php';

// Define the function to get the theme instance
function nibiru_get_theme_instance() {
    \NIBIRU_THEME\Inc\NIBIRU_THEME::get_instance();
}

// Call the function to get the theme instance
nibiru_get_theme_instance();

// Enqueue scripts and styles
function nibiru_enqueue_scripts() {


}

add_action('wp_enqueue_scripts', 'nibiru_enqueue_scripts');

?>
