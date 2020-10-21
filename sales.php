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

	<?php
		//Screen 1 ACF fields
		$sales_sc1_banners = get_field("sales_sc1_banners");

		//Screen 2 ACF fields
		$sales_sc2_title_form = get_field("sales_sc2_title_form");
		$sales_sc2_subtitle_form = get_field("sales_sc2_subtitle_form");
		?>


<!--=============================================
    =            SALES page content         =
    =============================================-->
    
    <div class="shop-page-content mb-50">
			<div class="container">

					<div class="row row-10 mb-50">

					<?php 
						$sale_counter = 0;
						foreach( $sales_sc1_banners as $sale_banner ) { 
							$sale_counter = $sale_counter + 1;
						
					?>
				
						<!-- Banner -->
						<div class="col-12 mb-sm-30">
							<div class="single-banner">
							
							
								<a href="<?php echo $sale_banner['sales_sc1_banner_link']; ?>">
									<img src="<?php echo $sale_banner['sales_sc1_banner_img']; ?>" alt="Акция <?php echo $sale_counter;?>">
								</a>
							</div>
						</div>

					<?php } ?>
						
					
					</div>
			</div>
		</div>
	
	<!--=====  End of SALES page content  ======-->
	





	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-50">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">
							<?php echo $sales_sc2_title_form; ?>
						</h2>
						<p>
							<?php echo $sales_sc2_subtitle_form; ?>
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