<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marco
 */	
	

?>
	<div class="banner banner-main banner-category banner-section" style="background-image: url('<?= get_field('main_banner_image')?>')">
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
				<div class="col-12">
					<div class="excerpt">
						<?= the_excerpt() ?>
					</div>
					<div class="content">
						<?= get_field('main_content') ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gallery">
		<div class="container">
			<div class="row">
				<?php for ($i = 1; $i <= 6; $i++) { ?>
					<?php $_img = get_field('gallery_image_'.$i.'') ?>
					<?php if(!empty($_img)):?>
						<div class="col-12 col-md-6 col-category-img move">
							<div class="img-wrapper">
								<img src="<?= $_img?>" alt="<?= the_title()?>">
							</div>
						</div>
					<?php endif ?>
				<?php }?>
			</div>
		</div>
	</div>
