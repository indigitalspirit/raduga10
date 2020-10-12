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
	=            FAQ page content         =
	=============================================-->


	<!--=============================================
	=           price section
	=============================================-->
	
	<div class="price-section mb-50">
		<div class="container">
			<div class="row mb-30">
				
				<!-- About Section Title -->
				<!-- <div class="about-section-title col-12 mb-50">
					
				
				</div> -->

				<!-- About Feature -->
				<div class=" col-md-6 col-12 mb-sm-30">
					<div class="row">
						
						<div class="col-12 mb-30">
							<h3>Возврат товара</h3>

							<p>
								Текст о возврате товара
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>

						<div class="col-12 mb-30">
							<h3>Проверка товара при получении</h3>

							<p>
								Текст о возврате товара
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						
					
					
						
					</div>
				</div>
				
				<!-- About Feature -->
				<div class=" col-md-6 col-12 mb-sm-30">
					<div class="row">
						
						<div class="col-12 mb-30">
							<h3>Возврат денежных средств</h3>

							<p>
								Текст о возврате товара
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>

						<div class="col-12 mb-30">
							<h3>Гарантийное обслуживание</h3>

							<p>
								Текст о возврате товара
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						
					
					
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				
				<div class="col-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					

					<div class="row">
						<div class="col-12">
							<!--=======  contact form content  =======-->
							
							<div class="contact-form-content">
								<h2 class="contact-page-title">Остались вопросы?</h2>
								<p>
									Напишите нам!
								</p>
		
								<div class="contact-form">
									<form id="contact-form" action="assets/php/mail.php" method="post">
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
									</form>
								</div>
								<p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
							</div>
							
							<!--=======  End of contact form content =======-->
						</div>
					</div>


					
					
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of FAQ page content  ======-->



<?php 
get_footer(); 