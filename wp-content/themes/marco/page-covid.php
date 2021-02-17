<?php
/* Template Name: Covid Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>

<main>
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="logo">
                <img src="<?= $img_path.'/images/Marco.svg' ?>" alt="Marco">
            </div>
            <div class="covid-form">
                <?= do_shortcode('[contact-form-7 id="10" title="Contact form 1"]')?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
