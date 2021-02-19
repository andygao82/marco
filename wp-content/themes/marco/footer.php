<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marco
 */

?>
		<div class="map">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="wrapper">
							<div class="inner-wrapper">
								<h2>OUR SHOP</h2>
								<div class="content">
									<h4>Location -</h4>
									<p>Shop 8. Reservoir Central</p>
									<p>830 Plenty Road, Reservoir VIC 3076</p>
								</div>
								<div class="links">
									<a href="#">Conctact Us</a>
									<a href="#">Get Direction</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- .map -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row top-row">
				<div class="col-12">
					<div class="wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="footer-logo">
							<img src="<?php echo get_template_directory_uri('/'); ?>/images/footer-logo.svg" alt="Marco Fine Foods and Groceries">
						</a>
						<div class="footer-links">
							<h3>Get to Know Us</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Feature Products</a></li>
								<li><a href="#">Weekly Special</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="footer-opening-hours">
							<span>Monday - Saturday</span>
							<span>8:00 AM - 8:00 PM</span>
							<br>
							<span>Sunday</span>
							<span>8:00 AM - 6:00 PM</span>
						</div>
						<div class="footer-newsletter">
							<h3>Subscribe Our Newsletter</h3>
							<!-- Begin Mailchimp Signup Form -->
							<div id="mc_embed_signup">
								<form action="https://marcofinefoods.us7.list-manage.com/subscribe/post?u=3229aeba97f46ad90350657c3&amp;id=e9a467706e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<div id="mc_embed_signup_scroll">
										<div class="mc-fields">
											<div class="mc-field-group">
												<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
												</label>
												<input type="text" value="" name="FNAME" class="required" id="mce-FNAME"  placeholder="First Name" >
											</div>
											<div class="mc-field-group">
												<label for="mce-LNAME">Last Name </label>
												<input type="text" value="" name="LNAME" class="" id="mce-LNAME"  placeholder="Last Name" >
											</div>
										</div>
										<div class="mc-field-group">
											<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
											</label>
											<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email address">
										</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3229aeba97f46ad90350657c3_e9a467706e" tabindex="-1" value=""></div>
										<div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="footer-submit"></div>
									</div>
								</form>
							</div>
							<!--End mc_embed_signup-->
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-row">
				<div class="col">
					<div class="wrapper">
						<span>Copyright &copy; <?= date("Y") ?> Marco Fine Foods & Groceries. All rights reserved.</span>
						<div class="right-corner">
							<div class="social-media">
								<h3>Follow us on:</h3>
								<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
								<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
							</div>
							<a href="#" target="_blank" id="dd">Website by D&D Creative.</a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
