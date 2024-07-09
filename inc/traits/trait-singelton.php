<?php
/**
*
 */



namespace NIBIRU_THEME\Inc\Traits;

trait Singelton {
    public  function __construct(){

    }
    public  function __clone(){

    }
    final public static function get_instance(){
       static $instance = [];

       $called_class = get_called_class();

       if(!isset($instance[$called_class])){
           $instance[$called_class] = new $called_class();
           do_action(sprintf('nibiru_theme_singelton_init&s', $called_class));
       }
       return $instance [$called_class];
    }
}