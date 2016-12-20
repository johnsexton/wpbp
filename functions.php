<?php

if ( ! function_exists( 'theme_setup' ) ) :
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 0 );
    add_image_size( 'original', 0, 0 ); 
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'theme' ),
		'footer'  => __( 'Footer Menu', 'theme' ),
	) );
endif; // theme_setup


// Enable Custom Functions
define('FUNCTIONS_PATH', STYLESHEETPATH . '/functions/');

// Dashboard Hacks
// require_once(FUNCTIONS_PATH . 'dashboard-hacks.php');

// Next/Previous Links
require_once(FUNCTIONS_PATH . 'content-navigation.php');

// Custom Post Types
// require_once(FUNCTIONS_PATH . 'cpt-name.php');
// require_once(FUNCTIONS_PATH . 'cpt-recent-posts-widget.php');
