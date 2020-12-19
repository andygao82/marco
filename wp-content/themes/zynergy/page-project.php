<?php
/* Template Name: Home Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>
<div class="landing-banner">
    <div class="container">
        <div class="wrapper">
            <a href="javascript:;" id="enter">ENTER</a>
        </div>
    </div>
</div>
<main>
    <section class="banner"></section>
    <section class="slogan">
        <div class="container">
            <div class="wrapper">
                <img src="<?php echo $img_path.'/images/zynerge_secondary.svg' ?>" alt="Zynergy" id="slogan-logo">
                <div class="slogan-content">
                    <?php if(!empty(get_field('home_slogan_1'))) :?>
                        <span><?= get_field('home_slogan_1')?></span>
                    <?php endif; ?>
                    <?php if(!empty(get_field('home_slogan_2'))) :?>
                        <span><?= get_field('home_slogan_2')?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <?php for ($i = 1; $i < 3; $i ++){?>
        <div class="project project<?= $i ?>">
            <div class="wrapper">
                <div class="project-image">
                    <img src="<?php echo get_field('project_image_'.$i.'') ?>" alt="Zynergy">
                </div>
                <div class="project-detail">
                    <div class="project-detail-wrapper">
                        <a href="<?php echo get_field('project_link_'.$i.'')?>" class="project-detail-logo">
                            <img src="<?php echo get_field('project_logo_'.$i.'')?>" alt="Zynergy">
                        </a>
                        <div class="project-detail-address-status">
                            <span><?= get_field('project_address_'.$i.'')?></span>
                            <span><?= get_field('project_status_'.$i.'')?></span>
                        </div>
                        <a href="<?php echo get_field('project_link_'.$i.'')?>" class="link project-detail-more">MORE DETAIL</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <section class="projects-coming">
        <div class="wrapper">
            <ul>
                <?php for ($j = 1; $j < 4; $j ++){?>
                    <li>
                        <a href="javascript:;">
                            <img src="<?php echo get_field('project_coming_'.$j.'')?>" alt="Zynergy">
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>
