<?php
/*
Template Name: Подарочный сертификат
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



	<?php
		//Screen 1 ACF fields
		$sertificates_sc1_text = get_field("sertificates_sc1_text");
		$sertificates_sc1_left_block = get_field("sertificates_sc1_left_block");
		$sertificates_sc1_img = get_field("sertificates_sc1_img");

		//Screen 2 ACF fields
		$sertificates_sc2_title_form = get_field("sertificates_sc2_title_form");
		$sertificates_sc2_subtitle_form = get_field("sertificates_sc2_subtitle_form");
		?>


	<!--=============================================
	=            SERTIFICATES page content         =
	=============================================-->


	<div class="page-section mb-50">
		<div class="container">
			<div class="row row-30">

				<!-- About Content -->
				<div class="about-content col-lg-6">
					<div class="row">
						<div class="col-12 mb-20">
							<?php echo $sertificates_sc1_text; ?>
						</div>

					<?php foreach( $sertificates_sc1_left_block as $sertificates_block ) { ?>
						<div class="col-12 mb-20">
							<h4>
							<?php echo $sertificates_block['sertificates_sc1_left_block_item_title']; ?>
							</h4>
							<p>
							<?php echo $sertificates_block['sertificates_sc1_left_block_item_text']; ?>
							</p>
						</div>
					<?php } ?>
					

					</div>
				</div>
				
				<!-- About Image -->
				<div class="about-image col-lg-6 mb-50">
					<img src="<?php echo $sertificates_sc1_img;?>" alt="">
				</div>
				
				
				
			</div>

		</div>
	</div>


	<!--=====  End of SERTIFICATES page content  ======-->


	<div class="border-section mb-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="border-container">

					</div>
				</div>
			</div>
		</div>
	</div>


	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">
						<?php echo $sertificates_sc2_title_form;?>
						 </h2>
						<p>
						<?php echo $sertificates_sc2_subtitle_form;?>
						</p>

						<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="182" title="Заявка на главной"]'); ?>
							<!-- <form id="contact-form" action="assets/php/mail.php" method="post">
								<div class="form-group">
									<label>Ваше имя: <span class="required">*</span></label>
									<input type="text" name="customerName" id="customername" required="">
								</div>
								<div class="form-group">
									<label>Ваш email: <span class="required">*</span></label>
									<input type="email" name="customerEmail" id="customerEmail" required="">
								</div>
								<div class="form-group">
									<label>Ваш телефон:</label>
									<input type="phone" name="contactPhone" id="contactPhone">
								</div>
								<div class="form-group">
									<label>Сообщение:</label>
									<textarea name="contactMessage" id="contactMessage"></textarea>
								</div>
								<div class="form-group mb-0">
									<button type="submit" value="submit" id="submit" class="fl-btn" name="submit">Отправить</button>
									<span class="contact-form__caption">
										Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">"Политикой конфиденциальности"</a>
									</span>
								</div>
							</form> -->
						</div>
						<!-- <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p> -->
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


<?php 
get_footer(); 