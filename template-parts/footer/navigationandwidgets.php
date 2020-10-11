<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

	?>
    
    <!--=======  footer navigation and widgets  =======-->
		
		<div class="footer-navigation pt-40 pb-20 pb-lg-40 pt-sm-30 pb-sm-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<!--=======  about block  =======-->

						<?php 
							$about_shop_description = get_option( 'raduga10_footer_info_field');

							$shop_phone = get_option( 'raduga10_phone_field');

							$shop_shedule = get_option( 'raduga10_shedule_field');

							$shop_address = get_option( 'raduga10_address_field');

							$shop_mail = get_option( 'raduga10_mail_field');

							$shop_whatsapp = get_option( 'raduga10_whatsapp_field');
							$shop_vk = get_option( 'raduga10_vk_field');

						?>
						
						<div class="about-block">
							<div class="image">
								<?php
									the_custom_logo();
								?>
						
							</div>

							<div class="about-text">
								<p>
								<?php 
										
										echo $about_shop_description;
										
									?>
								
								</p>
							
							</div>

							<div class="social-links">
								<ul>
									<li><a href="<?php echo $shop_whatsapp;?>" class="whatsapp"  data-tooltip="WhatsApp"><i class="fa fa-whatsapp"></i></a></li>
									<li><a href="<?php echo $shop_vk;?>" class="vk"  data-tooltip="vk"><i class="fa fa-vk"></i></a></li>
								
								</ul>
							</div>
						</div>
						
						<!--=======  End of address block  =======-->
					</div>

					<?php if ( is_active_sidebar('footer-1') ) : ?>
						<div class="col-lg-2 col-md-6">
							<!--=======  widget block  =======-->
							
								<?php dynamic_sidebar('footer-1'); ?>																
							<!--=======  End of widget block  =======-->
						</div>
					<?php endif; ?>
					<?php if ( is_active_sidebar('footer-2') ) : ?>
					<div class="col-lg-2 col-md-6">
						<!--=======  widget block  =======-->
						
							<?php dynamic_sidebar('footer-2'); ?>
						
						<!--=======  End of widget block  =======-->
					</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar('footer-3') ) : ?>
					<div class="col-lg-2 col-md-6">
						<!--=======  widget block  =======-->

						 
							<?php dynamic_sidebar('footer-3'); ?>
						
						<!--=======  End of widget block  =======-->
					</div>
					<?php endif; ?>


					<div class="col-lg-3 col-md-6">
						<!--=======  address block  =======-->
						<div class="widget-block">
							<h4 class="footer-widget-title mt-sm-20 mb-sm-10">Контакты</h4>
							
							<div class="address-block">
								

								<div class="address-text">
								
									<ul>
										<li><p>
											<!-- <i class="icon ion-md-alarm"></i>  -->
											<i class="fa fa-phone"></i> 
											<span class="support-no">
												<a href="tel:<?php echo $shop_phone;?>"><?php echo $shop_phone;?></a>
											</span>
										</p></li>
										<li>
											<p>
												<i class="icon ion-md-alarm"></i> 
												<!-- <i class="fa fa-phone"></i>  -->
												<span class="support-no">
												<?php echo $shop_shedule;?>
												</span>
											</p>
										</li>
										<li>
											<p>
												<!-- <i class="icon ion-md-alarm"></i>  -->
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span class="support-no">
												<a href="/contacts"><?php echo $shop_address;?></a>
												</span>
											</p>
										</li>
										<li><p>
											<!-- <i class="icon ion-md-alarm"></i>  -->
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span class="support-no">
												<a href="mailto:<?php echo $shop_mail;?>"><?php echo $shop_mail;?></a>
											</span>
										</p></li>
									</ul>
								</div>

						
							</div>
						</div>
						
						<!--=======  End of address block  =======-->
					</div>

				</div>
			</div>
		</div>
		
		<!--=======  End of footer navigation  and widgets =======-->