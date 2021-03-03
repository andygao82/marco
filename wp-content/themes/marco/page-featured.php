<?php
    /* Template Name: Featured Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';

?>
<main>
    <div class="banner banner-main banner-featured banner-section" style="background-image: url('<?= get_field('banner_image')?>')">
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
				<?php for ($i = 1; $i <= 10; $i++) { ?>
                    <?php $_featuredProduct = get_field('featured_product_'.$i.'') ?>
                    <?php if(!empty($_featuredProduct)) :?>
						<?php $image_url = $_featuredProduct['url']; ?>
                        <?php $image_alt = $_featuredProduct['alt']; ?>
                        <?php $image_title = $_featuredProduct['title']; ?>
                        <?php $image_description = $_featuredProduct['description']; ?>
						<div class="col-12 col-featured move">
							<div class="wrapper">
								<div class="image-wrapper">
									<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
								</div>
								<div class="content-wrapper">
									<h2><?php echo esc_attr($image_title);?></h2>
									<p>
										<?php echo esc_attr($image_description);?>
									</p>
								</div>
							</div>
						</div>
		
                    <?php endif ?>
                <?php } ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>