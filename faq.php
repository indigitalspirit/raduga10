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

	<?php
		//Screen 1 ACF fields
		$faq_sc1_qandas = get_field("faq_sc1_qandas");


		//Screen 2 ACF fields
		$faq_sc2_title_form = get_field("faq_sc2_title_form");
		$faq_sc2_subtitle_form = get_field("about_sc2_links_socials");

	?>


	<div class="page-section mb-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">
					<div class="faq-wrapper">

						<div id="accordion">
						<?php 
							$qa_item_counter = 0;
							foreach($faq_sc1_qandas as $faq_sc1_qandas_item) {
								$qa_item_counter = $qa_item_counter + 1;
						?>
							<div class="card">
								<div class="card-header" id="heading<?php echo $qa_item_counter;?>">
									<h5 class="mb-0">
										<button class="btn btn-link <?php if($qa_item_counter > 1){ echo ' collapsed';}?>" data-toggle="collapse" data-target="#collapse<?php echo $qa_item_counter;?>" aria-expanded="<?php if($qa_item_counter > 1){ echo 'false';} else { echo 'true';}?>" aria-controls="collapse<?php echo $qa_item_counter;?>">
											<?php echo $faq_sc1_qandas_item['faq_sc1_qandas_item_question']; ?>											
											<span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>

								<div id="collapse<?php echo $qa_item_counter;?>" class="collapse <?php if($qa_item_counter == 1){ echo 'show';}?>" aria-labelledby="heading<?php echo $qa_item_counter;?>" data-parent="#accordion" style="">
									<div class="card-body">
										<p><?php echo $faq_sc1_qandas_item['faq_sc1_qandas_item_answer']; ?></p>
									</div>
								</div>
							</div>
							<!-- <div class="card">
								<div class="card-header" id="heading2">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
											What Payment Methods are Available? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
									<div class="card-body">
										<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading3">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
											How I Return back my product? <span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
									<div class="card-body">
											<p>Terms know how to pursue pleasure rationally encounter cnces that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because.</p>
									</div>
								</div>
							</div> -->
						<?php 
							}
						?>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!--=====  End of FAQ page content  ======-->


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
							<?php echo $faq_sc2_title_form; ?>
						</h2>
						<p>
							<?php echo $faq_sc2_subtitle_form; ?>
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