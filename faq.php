<?php
/*
Template Name: Вопросы и ответы
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
				<div class="col-lg-12">
					<div class="faq-wrapper">

						<div id="accordion">
							<div class="card">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											What Shipping Methods are Available? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
									<div class="card-body">
										<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											What Payment Methods are Available? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="card-body">
										<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											How I Return back my product? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="card-body">
											<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFour">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											What is the payment secutiry system? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
									<div class="card-body">
											<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingFive">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											How can I track my order?<span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
									<div class="card-body">
											<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingSix">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											Do I need creat account for buy products?<span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
									<div class="card-body">
											<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
						</div>

					</div>
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