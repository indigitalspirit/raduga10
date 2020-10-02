<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Enqueue styles.
 */
function raduga10_styles() {
	wp_enqueue_style( 'raduga10-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'raduga10-style', 'rtl', 'replace' );
  
}
add_action( 'wp_enqueue_scripts', 'raduga10_styles' );


/**
 * Enqueue scripts
 */
function raduga10_scripts() {

	wp_enqueue_script( 'raduga10-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'raduga10_scripts' );

