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
    <div class="container-fluid site-navigation-container
    <?php
        if ( is_admin_bar_showing() ) {
            echo ' admin-bar-is-showing ';
        }
    ?>">
        <div class="row">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="navbar-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-link"><?php bloginfo( 'name' ); ?></a>
                    <button data-toggle="collapse" data-target="#main-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div id="main-navbar-collapse" class="collapse navbar-collapse">
                    <?php
                    /* Primary navigation */
                    wp_nav_menu( array(
                            'menu'       => 'primary',
                            'depth'      => 2,
                            'container'  => false,
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'walker'     => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
            </nav><!-- #site-navigation -->
        </div>
    </div>
	<header id="masthead" class="site-header" role="banner" style="background: url(<?php echo( get_header_image() ); ?>) no-repeat center fixed; background-size:cover;">

        <div class="container">
            <div class="row">
                <div class="site-branding text-center">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <h1 class="header-page-title text-left"><?php the_title(); ?></h1>
                        <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( ($description || is_customize_preview()) && is_home() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                        <?php
                    endif; ?>
                </div><!-- .site-branding -->



            </div>
        </div>
	</header><!-- #masthead -->
<!--    <svg version="1.1" id="oblique-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 1921 163" style="enable-background:new 0 0 1921 163;" xml:space="preserve">
    <style type="text/css">
    .st0{fill:#FFFFFF;}
    </style>
        <polygon class="st0" points="0,163 0,0 1921,163 "/>
    </svg>-->
	<div id="content" class="site-content">
