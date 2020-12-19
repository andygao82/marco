<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marco
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <script src="<?= get_template_directory_uri( '/' ) ?>/js/custom.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Zynergy' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php $img_path = get_template_directory_uri( '/' ); ?>
                    <a id="nav-icon">
                        <span></span>
                        <span></span>
                    </a>
                    <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo file_get_contents($img_path.'/images/logo.svg'); ?></a>
                    <a href="#" class="social-link" id="header-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->

                </a>
            </div>
        </div>

	</header><!-- #masthead -->
    <div class="contact-overlay">
        <div class="wrapper">
            <h3>General Inquiry:</h3>
            <a href="mailto:infor@zynergyproperty.com.au">mailto:infor@zynergyproperty.com.au</a>
        </div>
    </div>
	<div id="content" class="site-content">
