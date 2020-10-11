<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<!--=======  footer copyright  =======-->
		
<div class="footer-copyright pt-20 pb-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center text-md-left mb-md-0">
						<!--=======  footer copyright text  =======-->
						
						<div class="footer-copyright-text">
							<p>"Радуга10" &copy; 2020</p>
						</div>
						<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'raduga10' ), 'raduga10', '<a href="https://anastasia-pavlova.com/">Anastasia Pavlova</a>' );
				?>
						
						<!--=======  End of footer copyright text  =======-->
					</div>
					
					<div class="col-md-6 text-center text-md-right">
						<!--=======  payment logo  =======-->
						<div class="footer-politics-text">
							<p><a href="/privacy_policy">Политика конфиденциальности</a></p>
						</div>
						
						
						<!--=======  End of payment logo  =======-->
					</div>
				</div>
			</div>
		</div>
		
		<!--=======  End of footer copyright  =======-->
