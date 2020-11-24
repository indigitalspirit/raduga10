<?php
/*
Template Name: Гарантии
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
	=            GARANTIES page content         =
	=============================================-->


	<?php
		//Screen 1 ACF fields
		$garanties_sc1_block_left_1 = get_field("garanties_sc1_block_left_1");
		$garanties_sc1_block_left_2 = get_field("garanties_sc1_block_left_2");
		$garanties_sc1_block_right_1 = get_field("garanties_sc1_block_right_1");
		$garanties_sc1_block_right_2 = get_field("garanties_sc1_block_right_2");

		//Screen 2 ACF fields
		$garanties_sc2_title_form = get_field("garanties_sc2_title_form");
		$garanties_sc2_subtitle_form = get_field("garanties_sc2_subtitle_form");
	?>


	<!--=============================================
	=           price section
	=============================================-->
	
	<div class="price-section mb-50">
		<div class="container">
			<div class="row mb-30">

				<!-- About Feature -->
				<div class=" col-md-6 col-12 mb-sm-30">
					<div class="row">
						
						<div class="col-12 mb-30">
							<h3>
								<?php echo $garanties_sc1_block_left_1['garanties_sc1_block_left_title']; ?>
							</h3>

							<p>
							<?php echo $garanties_sc1_block_left_1['garanties_sc1_block_left_text']; ?>
							</p>
						</div>

						<div class="col-12 mb-30">
							<h3>
							<?php echo $garanties_sc1_block_left_2['garanties_sc1_block_left_title']; ?>
							</h3>

							<p>
							<?php echo $garanties_sc1_block_left_2['garanties_sc1_block_left_text']; ?>
							</p>
						</div>
						
					
					
						
					</div>
				</div>
				
				<!-- About Feature -->
				<div class=" col-md-6 col-12 mb-sm-30">
					<div class="row">
						
						<div class="col-12 mb-30">
							<h3>
							<?php echo $garanties_sc1_block_right_1['garanties_sc1_block_right_title']; ?>
							</h3>

							<p>
							<?php echo $garanties_sc1_block_right_1['garanties_sc1_block_right_text']; ?>
							</p>
						</div>

						<div class="col-12 mb-30">
							<h3>
							<?php echo $garanties_sc1_block_right_2['garanties_sc1_block_right_title']; ?>
							</h3>

							<p>
							<?php echo $garanties_sc1_block_right_2['garanties_sc1_block_right_text']; ?>
							</p>
						</div>
						
					
					
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>

	<div class="border-section mb-50">
		<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="col-12"> -->
					<div class="border-container">

					</div>
				<!-- </div>
			</div>
		</div> -->
	</div>


	<div class="page-section mb-70">
		<div class="container">
			<div class="row">
				
				<div class="col-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					

					<div class="row justify-content-center">
						<div class="col-12 col-lg-8">
							<!--=======  contact form content  =======-->
							
							<div class="contact-form-content contact-form__contacts">
								<h2 class="contact-page-title">
									<?php echo $garanties_sc2_title_form; ?>
								</h2>
								<p class="contact-page-subtitle">
									<?php echo $garanties_sc2_subtitle_form; ?>
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


					
					
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of GARANTIES page content  ======-->



<?php 
get_footer(); 