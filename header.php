<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<title>
		<?php wp_title(" - ", true, "right");
		bloginfo("name");
		global $page, $paged;
		$currentpage = max($paged, $page);
		if ($currentpage >= 2)
			echo " - Page " . $currentpage; ?>
	</title>
	<meta charset="<?php bloginfo("charset"); ?>" />
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/ie6.css" media="all" />
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
	<?php if (is_singular() && get_option("thread_comments"))
		wp_enqueue_script("comment-reply");
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header">
		<div id="title">
			<h1><a href="<?php bloginfo("wpurl"); ?>"><?php bloginfo("name"); ?></a></h1>
			<p id="description"><?php bloginfo("description"); ?></p>
		</div>

		<div id="menu">
			<?php wp_nav_menu(array("menu"=>"Header", "container"=>"div", "depth"=>1)); ?>
		</div>
	</div>
