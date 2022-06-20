<?php 
/**
 * Functions and definitions
 * 
 */

 if(!function_exists('t_theme_setup')){
    function t_theme_setup(){
        /**
         * Make theme available for translation
         * 
         */
        //Registering our menus
        register_nav_menus(
            array(
                'first-menu'=>esc_html__('Primary  Menu is here'),
            )
            );
            add_theme_support('post-thumbnails');

            //Custimizing logo
            $argslogo=array(
                'height'=>40,
                'width'=>32
            );
            add_theme_support('custom-logo',$argslogo);
            
    }
 }
 add_action('after_setup_theme','t_theme_setup',0);