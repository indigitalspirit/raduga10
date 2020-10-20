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
			<div class="row row-30">

				<!-- About Image -->
				<div class="about-image col-lg-6 mb-50">
					<img src="assets/images/sliders/blog/03.jpg" alt="">
				</div>

				<!-- About Content -->
				<div class="about-content col-lg-6">
					<div class="row">
					

						<div class="col-12 mb-20">
							<h2>Несколько фактов о нас</h2>
							<p> предлагаем мягкую и корпусную мебель  
								по оптимальным ценам</p>
							<p>
								поставщики мебели - из Санкт-Петербурга
							</p>
							<p>
								работаем больше года
							</p>
							<p>
								доставка - по Карелии и всей России
							</p>

						</div>

						

					</div>
				</div>
				
				
				
				
				
			</div>



			<div class="row">
				<div class="col-12 col-md-6">
					<div class="row">
						<div class="col-12">
							<h2 class="contact-page-title">Мы в соцсетях </h2>
						<p>
							<i class="fa fa-vk"></i>
							<a href="https://vk.com/salon_mebeli_segeza" class="vk" data-tooltip="vk">https://vk.com/salon_mebeli_segeza</a>
							<div>
								<a href=" https://vk.com/club175668276" class="vk" data-tooltip="vk"> https://vk.com/club175668276</a>
							</div>
						</p>
						</div>
						<div class="col-12" >
							<h2 class="contact-page-title">Другие наши магазины</h2>
						<p>
							ссылка на сайт + краткое описание
						</p>
						<p>
							ссылка на сайт + краткое описание
						</p>
						
						</div>

					</div>
					
					
				</div>

				<div class="col-12 col-md-6">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">Есть вопросы? </h2>
						<p>
							Напишите нам, заполнив форму ниже, или позвоните по тел.: ХХХХХХХ
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


	<!--=====  End of FAQ page content  ======-->




	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
		</div>
	</div>




<?php 

get_footer(); 