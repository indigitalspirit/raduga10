<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raduga10
 */

if ( ! is_active_sidebar( 'sidebar-shop' ) ) {
	return;
}
?>

<div class="page-sidebar">
  <!--=======  single sidebar block  =======-->
		<?php dynamic_sidebar( 'sidebar-shop' ); ?>
</div><!-- #secondary -->
