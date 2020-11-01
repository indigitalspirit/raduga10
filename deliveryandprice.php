<?php
/*
Template Name: Доставка и оплата
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
	=            DELIVERY AND PRICE page content         =
	=============================================-->

	<?php
		//Screen 1 ACF fields
		$delivery_sc1_title = get_field("delivery_sc1_title");
		$delivery_sc1_text_left = get_field("delivery_sc1_text_left");
		$delivery_sc1_text_right = get_field("delivery_sc1_text_right");
		$delivery_sc1_map = get_field("delivery_sc1_map");
		$delivery_sc2_title_form = get_field("delivery_sc2_title_form");
		$delivery_sc2_subtitle_form = get_field("delivery_sc2_subtitle_form");


		//Screen 2 ACF fields
		$delivery_sc2_title_left = get_field("delivery_sc2_title_left");
		$delivery_sc2_list_left = get_field("delivery_sc2_list_left");
		$delivery_sc2_title_right = get_field("delivery_sc2_title_right");
		$delivery_sc2_text_right = get_field("delivery_sc2_text_right");
	?>


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mb-sm-45  mb-md-45">
					<div class="row">
						<div class="col-12 mb-50">
							<h1>
								<?php echo $delivery_sc1_title; ?>
							</h1>

							<div>
							<?php echo $delivery_sc1_text_left; ?>
							</div>
							
						</div>

						

					</div>

					<div class="row">
						<div class="col-12 mb-50">
						<div class="contact-map">
							<?php echo $delivery_sc1_map; ?>
						</div>
						</div>
					</div>

				</div>
				<div class="col-lg-6 col-md-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					<div class="row">
					<div class="col-12 mb-50">
						
						<?php echo $delivery_sc1_text_right; ?>
					</div>
					</div>

					<div class="row">
						<div class="col-12">
							<!--=======  contact form content  =======-->
							
							<div class="contact-form-content">
								<h2 class="contact-page-title">
									<?php echo $delivery_sc2_title_form; ?>
								</h2>
								<p>
									<?php echo $delivery_sc2_subtitle_form; ?>
								</p>
		
								<div class="contact-form contact-form__delivery">
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


	<!--=====  End of DELIVERY AND PRICE page content  ======-->




	<!--=============================================
	=           price section
	=============================================-->
	
	<div class="price-section mb-50">
		<div class="container">
			<div class="row mb-30">
				
				<!-- About Feature -->
				<div class="about-feature col-md-6 col-12 mb-sm-30">
					<div class="row">

					<div class="col-12 mb-30">
						<h3>
							<?php echo $delivery_sc2_title_left; ?>
						</h3>
					</div>
						
						<div class="col-12 mb-30">
							<?php 
							//get_pr($delivery_sc2_list_left);
								foreach($delivery_sc2_list_left as $delivery_item) {
									//get_pr( $delivery_item );
							?>
							
							<h4>
								<?php echo $delivery_item['delivery_sc2_list_left_item_title']; ?>
							</h4>
							<div>
								<?php echo $delivery_item['delivery_sc2_list_left_item_text']; ?>
							</div>

							<?php
								 }
							?>
						</div>
						
					
						
					</div>
				</div>
				
					<!-- About Feature -->
					<div class="about-feature col-md-6 col-12 mb-sm-30">
						<div class="row">
							
							<div class="col-12 mb-30">
								<h3>
								 <?php echo $delivery_sc2_title_right;?>
								</h3>
	
								<div>

								<?php echo $delivery_sc2_text_right;?>

								</div>
							</div>
							
							
							
						</div>
					</div>
				
				
				
			</div>
		</div>
	</div>



<?php 
get_footer(); 