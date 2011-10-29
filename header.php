<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php
        if (have_posts())
            the_post();
        rewind_posts();
    ?>
    <title><?php
        wp_title("");
        if (wp_title("", false))
            echo ' - ';
        bloginfo('name');
    ?></title>
    <meta charset="utf-8"/>
    <meta name="author" content="<?php the_author(); ?>"/>
    <meta name="description" content="<?php the_author(); ?>'s homepage"/>
    <meta name="keywords" content="<?php the_author(); ?>, <?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>"/>
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="title">
        <h1><?php bloginfo('name'); ?></h1>
        <p id="description"><?php bloginfo('description'); ?></p>
    </div>

    <div id="navbar">
        <?php wp_nav_menu(array('menu'=>'Header', 'container'=>'')); ?>
    </div>
