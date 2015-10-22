<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
            <div class="content-header">
                <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
    			     <?php bloginfo( 'name' ); ?>
                </a>
                <?php if(is_front_page()):?>
                    <div class="frase">
                        <?php echo get_post_meta($post->ID, "frase", true); ?>
                    </div>
                <?php endif;?>
                <div class="content-title">
                    <h1 class="site-title"></h1>
                    <h2 class="site-description"></h2>
                </div>

        </div><!-- content-header -->
    </header><!-- #masthead -->

        <div id="main" class="site-main">
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                         'container' =>false,
                         'menu_class' => 'nav',
                         'echo' => true,
                         'before' => '',
                         'after' => '',
                         'link_before' => '',
                         'link_after' => '',
                         'depth' => 0,
                         'walker' => new description_walker())
                         ); ?>

					<?php // get_search_form(); ?>
				</nav><!-- #site-navigation -->
            </div><!-- #navbar -->