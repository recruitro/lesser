<?php

require_once('includes/wp_bootstrap_navwalker.php');

/* import parent theme */
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style')  );
}

/* disable admin bar */
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {	
	show_admin_bar(false);
}


function register_menus() {
	register_nav_menu('primary-menu',__( 'Primary Menu' ));
	register_nav_menu('primary-menu-right',__( 'Primary Menu Right' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'init', 'register_menus' );

function get_gravatar_url( $email ) {
    $hash = md5( strtolower( trim ( $email ) ) );
    return 'http://gravatar.com/avatar/' . $hash;
}

add_theme_support( 'post-thumbnails' ); 