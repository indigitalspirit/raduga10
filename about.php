<?php
/*
Template Name: О компании
Template Post Type: page
*/
get_header();
?>

	<!--=============================================
	=            breadcrumb area         =
	=============================================-->

	<?php
	/**
	 * breadcrumbs_parts hook.
	 *
	 * @hooked raduga10_breadcrumbs_chunk - 15
	 *
	 */
	do_action( 'raduga10_breadcrumbs_parts' ); 
	?>

	<!--=====  End of breadcrumb area  ======-->


		<!--=============================================
	=            ABOUT page content         =
	=============================================-->


	<?php
		//Screen 1 ACF fields
		$about_sc1_title = get_field("about_sc1_title");
		$about_sc1_text = get_field("about_sc1_text");
		$about_sc1_img = get_field("about_sc1_img");

		//Screen 2 ACF fields
		$about_sc2_title_socials = get_field("about_sc2_title_socials");
		$about_sc2_links_socials = get_field("about_sc2_links_socials");
		$about_sc2_title_other = get_field("about_sc2_title_other");
		$about_sc2_links = get_field("about_sc2_links");
		$about_sc2_title_form = get_field("about_sc2_title_form");
		$about_sc2_subtitle_form = get_field("about_sc2_subtitle_form");
	?>


	<div class="page-section about-page mb-50">
		<div class="container">
			<div class="row row-30">

				<!-- About Image -->
				<div class="about-image col-lg-6 mb-50">
					<img src="<?php echo $about_sc1_img; ?>" alt="<?php echo $about_sc1_title; ?>">
				</div>

				<!-- About Content -->
				<div class="about-content col-lg-6">
					<div class="row">
						<div class="col-12 mb-20">
							<h1>
							<?php echo $about_sc1_title; ?>
							</h1>
							<div class="about-content__descr">
							<?php echo $about_sc1_text; ?>
							</div>
						</div>
					</div>
				</div>			
				
			</div>

	
			<div class="row">
				<div class="col-12 col-md-6">
					<h2 class="contact-page-title">
					<?php echo $about_sc2_title_socials; ?>
					</h2>

					<?php 
						// $shop_whatsapp = get_option( 'raduga10_whatsapp_field');
						// $shop_vk = get_option( 'raduga10_vk_field');
					?>

				<?php 
					if( $about_sc2_links_socials['about_sc2_links_socials_1']['about_sc2_links_socials_link']  != '' ): 
				?>
				<div class="about-content__descr">
					<?php 
						foreach($about_sc2_links_socials as $links_socials) {
					?>

				<?php if($links_socials['about_sc2_links_socials_link'] != ''): ?>
					<div>
						<?php echo $links_socials['about_sc2_links_socials_icon']; ?>
						<a href="<?php echo $links_socials['about_sc2_links_socials_link']; ?>" target="_blank">
							<?php echo $links_socials['about_sc2_links_socials_link']; ?>
						</a>
					</div>
				<?php endif; ?>
					<?php
							}
					?>
				</div>
				<?php endif;?>

				</div>
				<div class="col-12 col-md-6" >
					<h2 class="contact-page-title">
						<?php echo $about_sc2_title_other; ?>
					</h2>

					<?php 
						if( $about_sc2_links['about_sc2_link_1'] != '' ): 
					?>
						<div class="about-content__descr">
							<?php 
								foreach( $about_sc2_links as $about_link) {
							?>
								<a href="<?php echo $about_link; ?>">
									<?php echo $about_link; ?>
								</a>
							<?php
								}
							?>
						</div>
					<?php endif;?>		
				</div>
			</div>
		</div>
	</div>


	<div class="border-section mb-50 mt-50">
		<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="col-12"> -->
					<div class="border-container">

					</div>
				<!-- </div>
			</div>
		</div> -->
	</div>

			
	<div class="page-section about-page mb-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">

					<!--=======  contact form content  =======-->
					<div class="contact-form-content contact-form__about">
						<h2 class="contact-page-title">
							<?php echo $about_sc2_title_form; ?>
						</h2>
						<p class="contact-page-subtitle">
							<?php echo $about_sc2_subtitle_form; ?>
						</p>

						<div class="contact-form">
							
							<?php echo do_shortcode('[contact-form-7 id="182" title="Заявка на главной"]'); ?>
						</div>
						<!-- <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p> -->
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of ABOUT page content  ======-->


<?php 

get_footer(); 