<?php
/**
 * Accelerate Illdy Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Illdy Child
 * @since Energe Nul Huis Woubrugge 1.0
 */
 add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

 function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/layout/css/main.css' );
 }
 function create_front_page() {
     register_post_type( 'front_page',
         array(
             'labels' => array(
                 'name' => __( 'Front Page' ),
                 'singular_name' => __( 'Front Page' )
             ),
             'public' => true,
             'has_archive' => true,
             'rewrite' => array( 'slug' => 'front-page' ),
         )
     );
 }
 add_action( 'init', 'create_front_page' );
