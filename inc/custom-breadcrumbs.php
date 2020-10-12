<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'raduga10_breadcrumbs_parts', 'raduga10_breadcrumbs_chunk', 15 );

function raduga10_breadcrumbs_chunk() {
	get_template_part( 'template-parts/breadcrumbs/breadcrumbs' );
}

