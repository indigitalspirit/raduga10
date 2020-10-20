<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raduga10
 */

?>



		<!--=============================================
	=            footer         =
	=============================================-->

	<?php
	/**
	 * footer_parts hook.
	 *
	 * @hooked raduga10_footer_start - 15
	 * @hooked raduga10_navigationandwidgets_callback - 20
	 * @hooked raduga10_copyright_callback - 30
	 * @hooked raduga10_footer_end - 40
	 * @hooked raduga10_quick_view_modal_callback - 45
	 *
	 */
	do_action( 'raduga10_footer_parts' ); 
	?>

	
	<!--=====  End of footer  ======-->

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
	<!-- end of scroll to top -->

	
<!-- </div> -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
