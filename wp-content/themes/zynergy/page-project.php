<?php
/* Template Name: Project Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>
<main>
    <section class="banner" style="background-image: url(<?= get_field('project_hero_image') ?>)"></section>
    <section class="project-description">
        <div class="container">
            <div class="wrapper">
                <h1><?= get_field('project_name') ?></h1>
                <div class="project-description-text">
                    <?= get_field('project_description') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="project-images">
        <div class="wrapper">
            <?php for ($i = 1; $i < 3; $i ++){?>
                <?php if(get_field('project_gallery_image_'.$i.'')):?>
                <div class="project-image">
                    <img src="<?php echo get_field('project_gallery_image_'.$i.'') ?>" alt="Zynergy">
                </div>
                <?php endif; ?>
            <?php } ?>
        </div>
        <div class="wrapper">
            <?php for ($i = 3; $i < 5; $i ++){?>
                <?php if(get_field('project_gallery_image_'.$i.'')):?>
                    <div class="project-image">
                        <img src="<?php echo get_field('project_gallery_image_'.$i.'') ?>" alt="Zynergy">
                    </div>
                <?php endif; ?>
            <?php } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
