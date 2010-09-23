<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
  <head>
    <?php if (have_posts()) the_post(); rewind_posts(); ?>
    <title><?php wp_title("");if(wp_title("", false)){echo ' - ';}bloginfo('name');?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php the_author(); ?>"/>
    <meta name="description" content="<?php the_author(); ?>'s homepage"/>
    <meta name="keywords" content="<?php the_author(); ?>, <?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>"/>
    <link rel="stylesheet" title="Default" type="text/css"
          href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.gif" type="image/gif"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="/feed/" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
  </head>
<body>
<div id="page">
<div id="title">
  <h1><?php bloginfo('name'); ?></h1>
  <p id="tagline"><?php bloginfo('description'); ?></p>
</div>

<div id="navbar">
  <?php
  if (function_exists('wp_nav_menu'))
    wp_nav_menu(array('menu'=>'header','container'=>''));
  else
    wp_page_menu();
  ?>
</div>
