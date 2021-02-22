<?php
/*
 * Template Name: Marco Category
 * Template Post Type: post
 */
  
 get_header();  ?>


	<main id="main" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content-category', get_post_type() );


	

	endwhile; // End of the loop.
	?>

	</main><!-- #main -->

<?php
get_footer();
