<?php

if(!function_exists('xpent_enqueue')){
    function xpent_enqueue(){        
        wp_enqueue_style('custom-xpent-style-1', get_template_directory_uri() .'/css/font-awesome.min.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-2', get_template_directory_uri() .'/css/bootstrap.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-3', get_template_directory_uri() .'/css/jquery-ui.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-4', get_template_directory_uri() .'/css/owl.carousel.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-5', get_template_directory_uri() .'/css/magnific-popup.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-6', get_template_directory_uri() .'/css/fotorama.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-7', get_template_directory_uri() .'/css/custom.css',array(),'1.0.1','all');
        wp_enqueue_style('custom-xpent-style-8', get_template_directory_uri() .'css/responsive.css',array(),'1.0.1','all');
    }
}

// load stylesheets
add_action('wp_enqueue_scripts','xpent_enqueue');

// enqueue custom scripts

if(!function_exists('xpent_enqueue_scripts')){
    function xpent_enqueue_scripts(){
        wp_enqueue_script('my-custom-jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '1.0.1', true);
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('jquery-ui-min-script', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('fotorama-custom-script', get_template_directory_uri() . '/js/fotorama.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('caraousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.1', true);
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.1', true);
    }
}

// load scripts
add_action('wp_enqueue_scripts','xpent_enqueue_scripts');