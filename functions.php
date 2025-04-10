<?php

define('TUT_THEME_DIR_URI', get_template_directory_uri()); // DEFINE URI USING WORDPRESS FUNCTION
define('TUT_THEME_DIR', get_template_directory()); // DEFINE PATH USING WORDPRESS FUNCTION

// Add theme support for custom logo
function theme_shepmates_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Let WordPress manage the document title
    add_theme_support('title-tag');
    
    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');
    
    // Add support for HTML5 features
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'theme_shepmates_setup');

class Theme_shepmates {
    private static $instance = null;

    public static function get_instance() {
        if(null == self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
Theme_shepmates::get_instance(); // CALL THE CLASS TO INITIALIZE IT

// including stylesheet files
function load_styles() {
    
    wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' ); // ENQUEUE MAIN CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ); // ENQUEUE BOOTSTRAP CSS
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css' ); // ENQUEUE FONT AWESOME CSS
}

add_action( 'wp_enqueue_scripts', 'load_styles' ); // ADD THE FUNCTION TO THE HOOK

// including scripts files
function load_scripts() {
    wp_deregister_script( 'jquery' ); // DE-REGISTER JQUERY
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, '', true); // REGISTER JQUERY
    wp_enqueue_script( 'jquery' ); // ENQUEUE JQUERY "footer"   
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true ); // ENQUEUE BOOTSTRAP JS
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true ); // ENQUEUE MAIN JS
}

add_action( 'wp_enqueue_scripts', 'load_scripts' ); // ADD THE FUNCTION TO THE HOOK

function my_register_nav_menus() {
    register_nav_menus(
        array(
            'primary'     => 'Primary Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}

add_action('init', 'my_register_nav_menus');

