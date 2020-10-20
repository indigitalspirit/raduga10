<?php
/**
 * Template part for displaying custom breadcrumbs
 *
 * @package raduga10
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<!--=============================================
	=            breadcrumb area         =
	=============================================-->

<div class="breadcrumb-area pt-15 pb-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  breadcrumb container  =======-->
					
					<div class="breadcrumb-container">
			      <?php woocommerce_breadcrumb(); ?>
            </div>
					
					<!--=======  End of breadcrumb container  =======-->
				</div>
			</div>
		</div>
	</div>

<!--=====  End of breadcrumb area  ======-->