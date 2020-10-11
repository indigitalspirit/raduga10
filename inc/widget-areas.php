<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function raduga10_widgets_init() {
	// register_sidebar(
	// 	array(
	// 		'name'          => esc_html__( 'Sidebar', 'raduga10' ),
	// 		'id'            => 'sidebar-1',
	// 		'description'   => esc_html__( 'Add widgets here.', 'raduga10' ),
	// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 		'after_widget'  => '</section>',
	// 		'before_title'  => '<h2 class="widget-title">',
	// 		'after_title'   => '</h2>',
	// 	)
	// );


	register_sidebar( array(
		'name'          => 'Подвал блок левый',
		'id'            => 'footer-1',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Подвал блок центр',
		'id'            => 'footer-2',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => 'Подвал блок правый',
		'id'            => 'footer-3',
		'before_widget' => '<div class="widget-block">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
	) );




}
add_action( 'widgets_init', 'raduga10_widgets_init' );
