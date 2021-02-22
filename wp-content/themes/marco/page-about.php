<?php
    /* Template Name: About Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';

?>
<main>
    <div class="banner banner-main banner-about banner-section" style="background-image: url('<?= get_field('banner_image')?>')">
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
                        <p><?= get_field('main_brief') ?></p>
                    </div>
                    <div class="content">
                        <?= get_field('main_content') ?>
                    </div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>