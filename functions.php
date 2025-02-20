<?php
/**
 * Another WordPress Theme for Developers
 *
 * @package AWTD
 */

// Theme version
if ( ! defined( 'AWTD_THEME_VERSION' ) ) {
    define( 'AWTD_THEME_VERSION', '1.0.0' );
}

// Enqueue scripts
function AWTD_enqueue_assets() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), null, true );

    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), null, 'all');
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), null, 'all');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), null, true);

    wp_enqueue_script( 'awtd-custom-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), AWTD_THEME_VERSION, true );

    wp_enqueue_style( 'awtd-style', get_template_directory_uri() . '/assets/css/style.css', array(), AWTD_THEME_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'AWTD_enqueue_assets' );

// Theme support
function AWTD_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links' );
    
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'another-wordpress-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'AWTD_theme_setup' );

// Remove WordPress version from front-end
function AWTD_remove_wp_version() {
    return '';
}
add_filter( 'the_generator', 'AWTD_remove_wp_version' );

// Remove emojis from WordPress
function AWTD_disable_wp_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'AWTD_disable_wp_emojis' );

// Register default menu
function awtd_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'awtd' ),
        )
    );
}
add_action( 'init', 'awtd_register_menus' );

// Include admin pages
require get_template_directory() . '/includes/admin-page.php';
require get_template_directory() . '/includes/cpt-projects.php';
require get_template_directory() . '/includes/cpt-portfolios.php';
require get_template_directory() . '/includes/cpt-skills.php';
?>