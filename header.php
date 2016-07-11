<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package handsonmindson
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
    <img class="HomeHero__robot" src="<?php echo get_template_directory_uri(); ?>/assets/images/robot3_home_page.png">
    
    <button class="OverlayNav__toggle"><span class="OverlayNav__cog fa fa-cog"></span></button>
    
    <?php get_template_part('template-parts/components/overlay-navigation'); ?>
    
	<div id="content" class="site-content">
       
        <?php if (! is_front_page()) : ?>
            <div class="MastheadContainer container">
                <div class="Masthead">
                    <div class="LogoContainer">
                        <div class="Logo Logo--small">
                            <a href="<?php echo home_url(); ?>"><?php get_template_part('template-parts/components/logo'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
