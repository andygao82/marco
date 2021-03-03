<?php
    /* Template Name: Contact Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';

?>
<main>
    <div class="banner banner-main banner-contact banner-section" style="background-image: url('<?= get_field('banner_image')?>')">
        <div class="container">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
						<h1><?= the_title() ?></h1>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7">
					<div class="wrapper">
						<div class="contact-form">
							<h2>Get In Touch</h2>
							<?= do_shortcode('[contact-form-7 id="167" title="Get In Touch"]')?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5">
					<div class="wrapper wrapper-right">
						<div class="contact-info">
							<h3>Store Hours -</h3>
							<div>
								Sunday - Wednesday<br>8:00 AM - 6:00 PM<br>
								Thursday - Saturday<br> 8:00 AM - 6:00 PM
							</div>
						</div>
						<div class="contact-info">
							<h3>Store Hours -</h3>
							<div>Shop 8, Reservoir Cental<br>
								830 Plenty Road, Reservoir VIC 3076
							</div>
						</div>
						<div class="contact-info">
							<h3>Contact Information -</h3>
							<div>
								Email: info@marcofinefoods.com.au								
							</div>
						</div>
						<a href="#" target="_blank" class="link get-direction">Get Direction</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>