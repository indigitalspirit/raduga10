<?php 

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Custom Data' )
         ->show_on_post_type('page')
         ->show_on_template( 'templates/main-page.php' )
         ->add_fields( array(
	         Field::make( 'image', 'crb_photo' ),
         ) );