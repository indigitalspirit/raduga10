<?php
/*
Template Name: Контакты
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
	=            CONTACTS page content         =
	=============================================-->


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mb-sm-45  mb-md-45">
					<!--=======  contact page side content  =======-->
					
					<div class="contact-page-side-content">
						
						<!--=======  single contact block  =======-->

						<?php 
							$shop_phone = get_option( 'raduga10_phone_field');
							$shop_address = get_option( 'raduga10_address_field');
							$shop_shedule = get_option( 'raduga10_shedule_field');

							//Screen 1 ACF fields
							$contacts_sc1_manager_text = get_field("contacts_sc1_manager_text");
							$contacts_sc1_map = get_field("contacts_sc1_map");

							//Screen 2 ACF fields
							$contacts_sc2_title_form = get_field("contacts_sc2_title_form");
							$contacts_sc2_subtitle_form = get_field("contacts_sc2_subtitle_form");
						?>
						
						<div class="single-contact-block">
							<h4>
								<i class="fa fa-phone"></i> 
								<a href="tel:<?php echo trim($shop_phone);?>">
									<?php echo $shop_phone;?>
								</a>
							</h4>

							<p>
								<?php echo $contacts_sc1_manager_text;?>
							</p>
						</div>
						
            <!--=======  End of single contact block  =======-->
            
            
						<!--=======  single contact block  =======-->
						
						<div class="single-contact-block">
							<h4>
								<i class="fa fa-fax"></i> 
								<?php echo $shop_address;?>
							</h4>
						
						</div>
						
						<!--=======  End of single contact block  =======-->

						<!--=======  single contact block  =======-->
						
						<div class="single-contact-block">
							<h4>
								<i class="fa fa-clock-o"></i>
								<?php echo $shop_shedule;?>
							</h4>
							
						</div>
						
						<!--=======  End of single contact block  =======-->
					</div>
					
					<!--=======  End of contact page side content  =======-->

				</div>
				<div class="col-lg-6 col-md-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					
					<div class="contact-map">
						<?php echo $contacts_sc1_map;?>
						 
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of CONTACTS page content  ======-->


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
						<?php echo $contacts_sc2_title_form;?>
						</h2>
						<p class="contact-page-subtitle">
						<?php echo $contacts_sc2_subtitle_form;?>
						</p>

						<div class="contact-form">
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
							<?php echo do_shortcode('[contact-form-7 id="182" title="Заявка на главной"]'); ?>
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