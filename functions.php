<?php

/**
 *Theme Functions
 *
 * @package Nibiru
 */

if (! defined('NIBIRU_DIR PATH')){
    define('NIBIRU_DIR_PATH', untrailingslashit( get_template_directory()) );
}
//print_r(NIBIRU_DIR_PATH);

require_once NIBIRU_DIR_PATH .  '/inc/helpers/autoloader.php';

function nibiru_enqueue_scripts()
{
    wp_register_style("style-css", get_stylesheet_uri(), [], "all" );
    wp_register_style("bootstrap-css",get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false,'all' );

    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true);


    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('style.css');

    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'nibiru_enqueue_scripts');

?>