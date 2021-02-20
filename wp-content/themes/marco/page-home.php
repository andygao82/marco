<?php
    /* Template Name: Home Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';
    
?>

              
<main>
    <div class="banner banner-main banner-home">
        <div class="flexslider">
            <ul class="slides">
                <?php for ($i = 1; $i <= 3; $i++) { ?>
                    <li>
                        <?php $_img = get_field('home_banner_slide_'.$i.'') ?>
                        <?php if($_img): ?>
                            <?php $image_url = $_img['url']; ?>
                            <?php $image_alt = $_img['alt']; ?>
                            <?php $image_caption = $_img['caption']; ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                            <h2 class="text-center"><?php echo esc_attr($image_caption);?></h2>
                        <?php endif ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>
<script>
    $(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            touch: true,  
            slideshow: true,                //Boolean: Animate slider automatically
            slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
            animationSpeed: 1000,  
        });
    })
</script>