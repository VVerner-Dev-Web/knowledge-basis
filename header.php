<!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com/">


    <?php wp_head(); ?>
</head>

<body x-data="initTheme()" :class="{
        &#39;is-dark&#39;: dark,
        &#39;&#39;: !dark
    }">

    <?php do_action( 'flatsome_after_body_open' ); ?>
    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

    <?php VVerner\Views::getInstance()->getComponent('navbar');?>

    <div id="_wrapper">

        <?php do_action( 'flatsome_before_header' ); ?>

        <?php do_action( 'flatsome_after_header' ); ?>

        <main id="_main" class="<?php flatsome_main_classes(); ?>">
