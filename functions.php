<?php

/**
 *Theme Functions
 *
 * @package Nibiru
 */


function nibiru_enqueue_scripts()
{
    wp_enqueue_style("stylesheet", get_stylesheet_uri(), [], "all" );
}

add_action('wp_enqueue_scripts', 'nibiru_enqueue_scripts');
?>