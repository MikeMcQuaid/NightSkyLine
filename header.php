<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <?php if (have_posts()) the_post(); rewind_posts(); ?>
    <title><?php wp_title("");if(wp_title("", false)){echo ' - ';}bloginfo('name');?></title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php the_author(); ?>"/>
    <meta name="description" content="<?php the_author(); ?>'s homepage"/>
    <meta name="keywords" content="<?php the_author(); ?>, <?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>"/>
    <link rel="stylesheet" title="Default" type="text/css"
          href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.gif" type="image/gif"/>
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="/feed/" />
    <link rel="openid.server" href="http://www.myopenid.com/server" />
    <link rel="openid.delegate" href="http://mikearthur.myopenid.com/" />
    <?php wp_head(); ?>
  </head>
<body>
<div id="page">
<div id="title">
  <h1><?php bloginfo('name'); ?></h1>
  <p id="description"><?php bloginfo('description'); ?></p>
</div>

<div id="navbar">
  <a href="/">blog</a>
<?php
  $pages = get_pages('sort_column=menu_order');
  foreach ($pages as $page) {
    if (!empty($page->post_password)) {
      continue;
    }
    $link = '  <a href="'.get_page_link($page->ID).'">';
    $link .= strtolower($page->post_title);
    $link .= "</a>\n";
    echo $link;
  }
?>
</div>
