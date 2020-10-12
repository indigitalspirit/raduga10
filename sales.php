<?php
/*
Template Name: Акции
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
    =            shop page content         =
    =============================================-->
    
    <div class="shop-page-content mb-50">
			<div class="container">
					<div class="row">
							
							<div class="col-12 order-1 order-lg-2">
									<!--=======  slider banner  =======-->
									<div class="slider-banner home-one-banner banner-bg banner-bg-1 mb-30">
										<div class="banner-text">
												<p>Акции</p>
												<!-- <p class="big-text">Lamps Light Color</p>
												<p>Only from $209</p> -->
										</div>
									</div>
									
									<!--=======  End of slider banner  =======-->


									
							</div>
					</div>

					<div class="row row-10 mb-50">
				
						<!-- Banner -->
						<div class="col-md-6 mb-sm-30">
							<div class="single-banner">
								<a href="#"><img src="assets/images/banners/banner4.jpg" alt="Banner"></a>
							</div>
						</div>
						<div class="col-md-6 col-12 mb-sm-30">
							<div class="single-banner">
								<a href="#"><img src="assets/images/banners/banner4.jpg" alt="Banner"></a>
							</div>
						</div>
						
						
					</div>
			</div>
		</div>
	
	<!--=====  End of shop page content  ======-->
	





	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">Есть вопросы?</h2>
						<p>
							Напишите нам, заполнив форму ниже, или позвоните по тел. ХХХХХХХ
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
		</div>
	</div>



<?php 
get_footer(); 