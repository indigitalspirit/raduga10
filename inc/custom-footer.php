<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'raduga10_footer_parts', 'raduga10_footer_start', 15 );
function raduga10_footer_start() {
	?>
	<div class="footer-container">
	<?php
}
add_action( 'raduga10_footer_parts', 'raduga10_navigationandwidgets_callback', 20 );
function raduga10_navigationandwidgets_callback() {
	get_template_part( 'template-parts/footer/navigationandwidgets' );
}
add_action( 'raduga10_footer_parts', 'raduga10_copyright_callback', 30 );
function raduga10_copyright_callback() {
	get_template_part( 'template-parts/footer/copyright' );
}
add_action( 'raduga10_footer_parts', 'raduga10_footer_end', 40 );
function raduga10_footer_end() {
	?>
	</div>
	<?php
}
