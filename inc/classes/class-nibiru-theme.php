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
        add_theme_support('post-thumbnail');
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
    }

}
