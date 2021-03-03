<?php
    /* Template Name: Home Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';
?>

<main>
    <div class="banner banner-main banner-home banner-section">
        <div class="flexslider">
            <ul class="slides">
                <?php for ($i = 1; $i <= 6; $i++) { ?>
                    <?php $_img = get_field('home_banner_slide_'.$i.'') ?>
                    <?php if(!empty($_img)) :?>
                        <li>
                            <?php if($_img): ?>
                                <?php $image_url = $_img['url']; ?>
                                <?php $image_alt = $_img['alt']; ?>
                                <?php $image_caption = $_img['caption']; ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                <h2 class="text-center"><?php echo esc_attr($image_caption);?></h2>
                            <?php endif ?>
                        </li>
                    <?php endif ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="section about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <div class="about-video">
                            <a href="https://www.youtube.com/watch?v=<?= get_field('home_video_id')?>" data-lity>
                                <img src="https://img.youtube.com/vi/<?= get_field('home_video_id')?>/maxresdefault.jpg" alt="Our Story">
                                <i class="far fa-play-circle"></i>
                            </a>
                        </div>
                        <div class="about-our-story text-center">
                            <h2>Our Story</h2>
                            <div class="about-our-story-content">
                                <?php echo get_field('home_video_content')?>
                            </div>
                            <a href="#" class="link">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
    <div class="section category-section">
        <div class="container-fluid">
            <ul class="row">
            <?php
                global $post;
                $myposts = get_posts( array(
                    'numberposts'      => -1,
                    'category'         => 3,
                    'orderby'          => 'Date',
                    'order'            => 'ASC'
                ) );
                if ( $myposts ) {
                    foreach ( $myposts as $post ) :
                        setup_postdata( $post ); ?>
                        <li class="col-12 col-md-6 col-category move">
                            <div class="wrapper text-center">
                                <?php $_thumbnail = get_the_post_thumbnail() ?>
                                <a class="post-thumbnail" href="<?php echo esc_url( get_permalink() )?>">
                                    <?php if($_thumbnail){ ?>
                                            <?= get_the_post_thumbnail()?>
                                    <?php }else{?>
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/bg.png" alt="Placeholder">
                                    <?php } ?>
                                </a>
                                <div class="inner-wrapper">
                                    <h2 class="category-title"><a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark"><?php the_title() ?></a></h2>
                                    <div class="category-link">
                                        <a href="<?php echo esc_url( get_permalink() )?>" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                }
            ?>
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
            animationSpeed: 1000
        });
    })
</script>