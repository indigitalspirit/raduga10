<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


if ( ! function_exists( 'raduga10_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	add_action( 'after_setup_theme', 'raduga10_setup' );
	function raduga10_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on raduga10, use a find and replace
		 * to change 'raduga10' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'raduga10', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-main' => esc_html__( 'Primary', 'raduga10' ),
				'menu-categories' => esc_html__( 'Categories', 'raduga10' ),
			)
		);


		/** Change sub-menu class by overwriting wp menu  */
		class Raduga_Walker_Nav_Menu extends Walker_Nav_Menu {
			function start_lvl(&$output, $depth = 0, $args = array()) {
				
				$indent = str_repeat("\t", $depth);
				$output .= "\n$indent<ul class=\"category-mega-menu\">\n";
			}
		}



		//add class to parent menu items
// 		add_filter('wp_nav_menu_objects', 'css_for_nav_parrent');
// function css_for_nav_parrent( $items ){
// 	foreach( $items as $item ){
// 		if( __nav_hasSub( $item->ID, $items ) )
// 			$item->classes[] = 'category-mega-menu'; // все элементы поля "classes" меню, будут совмещены и выведены в атрибут class HTML тега <li>
// 	}

// 	return $items;
// }
// function __nav_hasSub( $item_id, $items ){
// 	foreach( $items as $item ){
// 		if( $item->menu_item_parent && $item->menu_item_parent == $item_id )
// 			return true;
// 	}

// 	return false;
// }

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'raduga10_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
    );
    

    /**
   * WooCommerce setup function.
   *
   * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
   * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
   * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
   *
   * @return void
   */
    add_theme_support(
      'woocommerce',
      array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
        'product_grid'          => array(
          'default_rows'    => 3,
          'min_rows'        => 1,
          'default_columns' => 4,
          'min_columns'     => 1,
          'max_columns'     => 6,
        ),
      )
    );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );


	}
endif;




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function raduga10_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'raduga10_content_width', 640 );
}
add_action( 'after_setup_theme', 'raduga10_content_width', 0 );



// function raduga10_woocommerce_setup() {
	
// }
// add_action( 'after_setup_theme', 'raduga10_woocommerce_setup' );





/**
 * Add custom fields (phone, address, email, social media) on admin-menu page
 *
 */
function raduga10_add_phone_field_to_admin_page(){


	//$option_name = 'raduga10_phone_field';

	$options_names = array(
		'raduga10_phone_field',
		'raduga10_shedule_field',
		'raduga10_address_field',
		'raduga10_whatsapp_field',
		'raduga10_vk_field',
	);

	for($i = 0; $i < count($options_names); $i++ ) {
			// регистрируем опцию
			register_setting( 'general', $options_names[$i] );
			// добавляем поле

			switch ($options_names[$i]) {
				case 'raduga10_phone_field':
						$this_option_name = "Телефон";
						break;
				case 'raduga10_shedule_field':
						$this_option_name = "Режим работы";
						break;
				case 'raduga10_address_field':
						$this_option_name = "Адрес";
						break;
				case 'raduga10_whatsapp_field':
					$this_option_name = "Ссылка на чат WhatsApp";
					break;
				case 'raduga10_vk_field':
					$this_option_name = "Ссылка на группу в vk";
					break;
			}

			add_settings_field( 
				"$options_names[$i]" . '_id', 
				"$this_option_name", 
				'raduga10_extra_fields_callback', 
				'general', 
				'default', 
				array( 
					'id' => "$options_names[$i]" . '_id', 
					'option_name' => "$options_names[$i]"
				)
			);
	}

	

	
}

function raduga10_extra_fields_callback( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];
	?>
	
	<input type="text" name="<?echo $option_name ?>" id="<? echo $id ?>" value="<? echo esc_attr( get_option($option_name) ) ?>" class="regular-text code" >

	<?
}
add_action('admin_menu', 'raduga10_add_phone_field_to_admin_page');