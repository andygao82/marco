<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="banner banner-main banner-contact banner-section" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
						<?php
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<?php
								marco_posted_on();
								marco_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
						<div class="entry-content">
							<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'marco' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marco' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->
					</div>
				</div>
			</div>
		</div>


	</div>
</article><!-- #post-<?php the_ID(); ?> -->
