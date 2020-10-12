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
	=            FAQ page content         =
	=============================================-->


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mb-sm-45  mb-md-45">
					<!--=======  contact page side content  =======-->
					
					<div class="contact-page-side-content">
						

						<!--=======  single contact block  =======-->
						
						<div class="single-contact-block">
							<h4><i class="fa fa-phone"></i> +79814024614</h4>

							<p>Менеджеры магазина принимают звонки ежедневно, с ХХ до ХХ</p>
						</div>
						
            <!--=======  End of single contact block  =======-->
            
            
						<!--=======  single contact block  =======-->
						
						<div class="single-contact-block">
							<h4><i class="fa fa-fax"></i> Адрес магазина: г. Сегежа, ул. Северная,
                д. 3, ТЦ "Радуга"</h4>
						
						</div>
						
						<!--=======  End of single contact block  =======-->

						<!--=======  single contact block  =======-->
						
						<div class="single-contact-block">
							<h4><i class="fa fa-clock-o"></i> Ежедневно: с 10:00 до 19:00</h4>
							
						</div>
						
						<!--=======  End of single contact block  =======-->
					</div>
					
					<!--=======  End of contact page side content  =======-->

				</div>
				<div class="col-lg-6 col-md-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					
					<div class="contact-map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A234c0c4eeeae2a2a10c87f4a7b1326e16968cfc04b24665f735d716204cfeab7&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of FAQ page content  ======-->


	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
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
		</div>
	</div>


<?php 
get_footer(); 