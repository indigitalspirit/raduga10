<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


/**
 * Enqueue styles.
 */
function raduga10_styles() {

	wp_enqueue_style( 'raduga10-style-fonts', 'https://fonts.googleapis.com/css?family=Rubik:400%2C500%7COpen+Sans:400', array(), null, 'all' );


	wp_enqueue_style( 'raduga10-style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style-helper', get_template_directory_uri() . '/assets/css/helper.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style-main', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style-plugins', get_template_directory_uri() . '/assets/css/plugins.css', array(), null, 'all' );

	wp_enqueue_style( 'raduga10-style', get_stylesheet_uri(), array());
  //wp_style_add_data( 'raduga10-style', 'rtl', 'replace' );
  
}
add_action( 'wp_enqueue_scripts', 'raduga10_styles' );


/**
 * Enqueue scripts
 */
function raduga10_scripts() {
	wp_enqueue_script( 'raduga10-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), null, true );

	wp_enqueue_script( 'raduga10-modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', array('jquery'), null );

	wp_enqueue_script( 'raduga10-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'raduga10-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'raduga10-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true );

	wp_enqueue_script( 'raduga10-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true );
	
	wp_enqueue_script('ajax-quick' , get_template_directory_uri() . '/assets/js/ajax-quick-veiw.js', array('jquery'), null, true);
	wp_localize_script('ajax-quick', 'ajax_quick' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('quick-nonce')
	));
	
// 	wp_localize_script('twentyfifteen-script', 'myajax', 
// 		array(
// 			'url' => admin_url('admin-ajax.php'),
// 			'nonce' => wp_create_nonce('myajax-nonce')
// 		)
// 	);  

wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);
	wp_localize_script('ajax-search', 'searchform' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('search-nonce')
	));



	// wp_enqueue_script( 'raduga10-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('jquery'), null, true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_dequeue_style( 'wcqi-css' );
}
add_action( 'wp_enqueue_scripts', 'raduga10_scripts' );

