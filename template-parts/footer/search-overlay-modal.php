<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<!--=============================================
	=            search overlay         =
	=============================================-->
	
	<div class="search-overlay" id="search-overlay">
		<a href="#" class="search-overlay-close" id="search-overlay-close"><i class="fa fa-times"></i></a>
		<div class="search-box">
			<?php get_search_form(); ?>
			<!-- <input type="search" placeholder="Search entire store here">
			<button><i class="icon ion-md-search"></i></button> -->
		</div>
	</div>
		
	<!--=====  End of search overlay  ======-->



