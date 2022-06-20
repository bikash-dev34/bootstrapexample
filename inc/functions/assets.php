<?php
/**
 * Enqueue scripts and styles
 * @return void
 * 
 */

 //Enqueue styles
 function tasks_scripts(){
    wp_enqueue_style('tcss-bootsrp',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),wp_get_theme()->get('Version'));
    // wp_enqueue_style('tcss-map',get_template_directory_uri().'/assets/css/bootstrap.min.css.map',array(),wp_get_theme()->get('Version'));
    
    //scripts
    wp_enqueue_script('tjs-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js',array('jquery'),wp_get_theme()->get('Version'));
    // wp_enqueue_script('tjs-map',get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js.map',array(),wp_get_theme()->get('Version'));

 }
 add_action('wp_enqueue_scripts','tasks_scripts');