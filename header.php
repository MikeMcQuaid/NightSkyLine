<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title>
		<?php
		global $title;
		if (is_archive())
			$title = "Archives: " . wp_title(" ", false, "right");
		elseif (is_search())
			$title = "Search Results: " . get_search_query();
		else
			$title = wp_title(" ", false, "right");

		if (is_home())
			$title .= get_bloginfo("name");

		global $page, $paged;
		$currentpage = max($paged, $page);
		if ($currentpage >= 2)
			$title .= " (Page $currentpage)";
		echo $title;

		if ($title)
			echo ' - ';
		if (is_home())
			bloginfo("description");
		else
			bloginfo("name"); ?>
	</title>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" media="all" />
	<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
	<?php if (is_singular() && get_option("thread_comments"))
		wp_enqueue_script("comment-reply");
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<div id="title">
			<h1><a href="<?php echo site_url(); ?>"><?php bloginfo("name"); ?></a></h1>
			<p id="description"><?php bloginfo("description"); ?></p>
		</div>

		<div id="menu">
			<?php wp_nav_menu(array("menu"=>"Header", "container"=>"div")); ?>
		</div>

	<!--[if lt IE 7]>
		<div style='background: red; color: black; font-size: 1.5em; padding: 0.1em; text-align: center;'>
			<p>This site will not appear correctly with your current version of Internet Explorer.</p>
			<p><a href="http://www.ie6countdown.com">Microsoft is saying people shouldn't use it any more.</a></p>
			<p><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">For a faster, safer browsing experience, upgrade for free today.</a></p>
		</div>
	<![endif]-->

	</div>
