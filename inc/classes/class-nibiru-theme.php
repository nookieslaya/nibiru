<?php
/**
 * Bootstraps the Theme
 *
 * @package Nibiru
 */

namespace NIBIRU_THEME\Inc;

use NIBIRU_THEME\Inc\Traits\Singelton;

class NIBIRU_THEME
{

    use Singelton;

    protected function __construct()
    {
//        load classes
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * ACTIONS
         */

        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height'=> true,
            'flex-width' => true,
        ]);
        add_theme_support('custom-background', [
            'default-color' => "fff",
            'default-image' => "",
            'default-repeat' => "no-repeat",
        ]);
        add_theme_support('post-thumbnail');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5',
            [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
//            'script',
            'style',
        ]);
        add_theme_support('wp-blog-style');
        add_theme_support('align-wide'); //support align images in editor

        global  $content_width;
        if(!isset($content_width)){
            $content_width = 1240;
        }
    }

}
