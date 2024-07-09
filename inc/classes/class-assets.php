<?php
/**
 * Enqueue the Theme
 *
 * @package Nibiru
 */

namespace NIBIRU_THEME\Inc;

use NIBIRU_THEME\Inc\Traits\Singelton;

class Assets{

    use Singelton;

    protected function __construct(){
//        load classes

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        //actions and filters
    }
    public function register_styles(){
        wp_register_style("style-css", NIBIRU_DIR_PATH, [], "all");
        wp_register_style("bootstrap-css", NIBIRU_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('style-css');

    }
    public function register_scripts(){
        wp_register_script('main-js', NIBIRU_DIR_URI . '/assets/main.js', [], true);
        wp_register_script('bootstrap-js', NIBIRU_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true);


        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');

    }
}