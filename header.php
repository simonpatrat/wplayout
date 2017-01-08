<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wplayout
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wplayout' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="background: url(<?php echo( get_header_image() ); ?>) no-repeat center fixed; background-size:cover;">
        <div class="container-fluid">
            <div class="row">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wplayout' ); ?></button>
                    <?php
                    /* Primary navigation */
                            wp_nav_menu( array(
                                    'menu'       => 'primary',
                                    'depth'      => 2,
                                    'container'  => false,
                                    'menu_class' => 'nav navbar-nav',
                                    'walker'     => new wp_bootstrap_navwalker())
                            );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="site-branding text-center">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding -->



            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
