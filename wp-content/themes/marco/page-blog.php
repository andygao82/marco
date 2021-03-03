<?php
    /* Template Name: Blog Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';

?>
<main>

<div class="banner banner-main banner-contact banner-section" style="background-image: url('<?= get_field('blog_banner')?>')">
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
            <div class="col-12 col-md-8 col-lg-7 col-blogs">
            <?php
                global $post;
                $myposts = get_posts( array(
                    'numberposts'      => -1,
                    'category'         => 4,
                    'orderby'          => 'Date',
                    'order'            => 'ASC'
                ) );
                if ( $myposts ) {
                    foreach ( $myposts as $post ) :
                        setup_postdata( $post ); ?>
                        <div class="col-blog move">
                            <div class="wrapper">
                                <?php $_thumbnail = get_the_post_thumbnail() ?>
                                <a class="post-thumbnail" href="<?php echo esc_url( get_permalink() )?>">
                                    <?php if($_thumbnail){ ?>
                                            <?= get_the_post_thumbnail()?>
                                    <?php }else{?>
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/bg.png" alt="Placeholder">
                                    <?php } ?>
                                </a>
                                <div class="inner-wrapper">
                                    <h2 class="blog-title"><a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark"><?php the_title() ?></a></h2>
									<div class="blog-excerpt">
										<?php the_excerpt() ?>
									</div>
                                    <div class="blog-link">
                                        <a href="<?php echo esc_url( get_permalink() )?>" class="link">
                                            Continue Reading
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                }
            ?>
            </div>
            <div class="col-12 col-md-4 col-lg-5 col-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</div>
</div>
</main>


<?php get_footer(); ?>