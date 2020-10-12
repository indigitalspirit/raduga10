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
	=            FAQ page content         =
	=============================================-->


	<div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mb-sm-45  mb-md-45">
					<div class="row">
						<div class="col-12 mb-50">
							<h1>Доставка</h1>
							<p>Бесплатно доставим заказ до двери в пределах города ( г. Сегежа)</p>
 
								<p>Стоимость доставки по Карелии - от 300 р., в зависимости от района.</p>
								 
								<p>Полную стоимость можно узнать у менеджера магазина по тел. ХХХХХХХХХ, или оставив заявку в форме ниже.</p>
								 
								<p>Возможен самовывоз товара: ежедневно, с Х до Х</p>

								<p>
									<!-- <i class="icon ion-md-alarm"></i>  -->
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span class="support-no">
										<a href="tel:89814024614">Адрес магазина: <br>г. Сегежа, ул. Северная д. 3 ТЦ "Радуга"</a>
									</span>
								</p>
						</div>

						

					</div>

					<div class="row">
						<div class="col-12 mb-50">
						<div class="contact-map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A234c0c4eeeae2a2a10c87f4a7b1326e16968cfc04b24665f735d716204cfeab7&amp;width=400&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
						</div>
					</div>

				</div>
				<div class="col-lg-6 col-md-12 order-2 order-lg-1">
					<!--=======  contact form content  =======-->
					<div class="row">
					<div class="col-12 mb-50">
						
						<p>Также, наши мастера предоставляют услуги по сборки мебели на дому.</p>
 
							<p>Выбрать мастера и оставить заявку вы можете по тел. ХХХХХХХХ, или заполнив форму:</p>
					</div>
					</div>

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
				<div class="about-feature col-md-6 col-12 mb-sm-30">
					<div class="row">
						
						<div class="col-12 mb-30">
							<h3>Способы оплаты</h3>

							<h4>Наличными</h4>
							<ul>
								<li>в розничном магазине на кассе</li>
								<li>онлайн на сайте</li>
							</ul>
						</div>
						
						<div class="col-12 mb-30">
							<h4>Банковской картой</h4>
							<ul>
								<li>в розничном магазине на кассе</li>
								<li>онлайн на сайте</li>
							</ul>
						</div>
						
						<div class="col-12 mb-30">
							<h4>Использовать подарочный сертификат</h4>
							<ul>
								<li>показать при оплате на кассе</li>
								<li>ввести промо-код с сертификата при оплате на сайте</li>
							</ul>
						</div>
						
						<div class="col-12 mb-30">
							<h4>Оплата в кредит</h4>
							<p>
								Предлагаем кредит на покупку мебели в розничном магазине на выгодных условиях.
							</p>
							<p>
								Сотрудничаем с банками:
							</p>
							 
							<ul>
								<li>Почта банк</li>
								<li>Хоум-кредит</li>
								<li>Отп банк</li>
								<li>Совком банк</li>
							</ul>
						</div>
					
						
					</div>
				</div>
				
					<!-- About Feature -->
					<div class="about-feature col-md-6 col-12 mb-sm-30">
						<div class="row">
							
							<div class="col-12 mb-30">
								<h3>Как оплатить заказ на сайте</h3>
	
								<p>Для оплаты заказа на сайте с помощью банковской карты необходимо:</p>
								<ol>
									<li>На странице оформления заказа выбрать вариант - «Оплата банковской картой» и нажать кнопку “Оплатить”</li>
									<li>Система переключит Вас на страницу авторизации, где вы можете указать
										данные банковской карты любой из платежных  систем: VISA, MasterCard, МИРе</li>
										<li>
											Далее система уведомит Вас о результатах оплаты. На ваш e-mail придет письмо с подтверждением заказа и чек об успешной оплате онлайн
										</li>
								</ol>
								<p>
									В случае возникновения каких-либо трудностей при оплате онлайн, вы можете позвонить по номеру ХХХХХХХ
								</p>
							</div>
							
							
							
						</div>
					</div>
				
				
				
			</div>
		</div>
	</div>



<?php 
get_footer(); 