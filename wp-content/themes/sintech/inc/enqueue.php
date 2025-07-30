<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package base_theme
 */

 //Enqueue theme styles
 function base_theme_style(){

    // Enqueue your main theme stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

     wp_register_style('theme', get_template_directory_uri() . '/css/theme.css', array(), false, 'all');
     wp_enqueue_style('theme');

     wp_register_style('remixicon', get_template_directory_uri() . '/assets/remixicon/fonts/remixicon.css', array(), false, 'all');
     wp_enqueue_style('remixicon');

     wp_register_style('slickcdntheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), false, 'all');
     wp_enqueue_style('slickcdntheme');

     wp_register_style('slickcdn', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), false, 'all');
     wp_enqueue_style('slickcdn');

     wp_register_style('owlcdn', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css', array(), false, 'all');
     wp_enqueue_style('owlcdn');

     wp_register_style('owlcdntheme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array(), false, 'all');
     wp_enqueue_style('owlcdntheme');

 }
 add_action('wp_enqueue_scripts','base_theme_style');


//Enqueue theme scripts
 function base_theme_scripts(){

    wp_enqueue_script('jquery');

     wp_register_script('theme', get_template_directory_uri() . '/js/theme.js','jquery',false,true);
     wp_enqueue_script('theme');

    //  wp_register_script('boostrapbundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js','jquery',false,true);
    //  wp_enqueue_script('boostrapbundle');

     wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js','jquery',false,true);
     wp_enqueue_script('slick');

     wp_register_script('owlcdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js','jquery',false,true);
     wp_enqueue_script('owlcdnjs');
 }
 add_action('wp_enqueue_scripts', 'base_theme_scripts');