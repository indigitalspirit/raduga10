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
	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковое меню на внутренних страницах сайта', 'raduga10' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'raduga10' ),
			'before_widget' => '<div class="single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковое меню на страницах блога', 'raduga10' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'raduga10' ),
			'before_widget' => '<div class="single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Сайдбар магазина', 'raduga10' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'raduga10' ),
		'before_widget' => '<div class="single-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => 'Подвал блок с логотипом',
		'id'            => 'footer-logo',
		'before_widget' => '<div class="about-block footer-logo">',
		'after_widget'  => '</div>',
		//'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		//'after_title'   => '</h4>',
	) );


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
