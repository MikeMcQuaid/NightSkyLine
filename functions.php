<?php
register_sidebar(array("name"=>"Footer Left", "description"=>"Left side of the footer"));
register_sidebar(array("name"=>"Footer Right", "description"=>"Right side of the footer"));

register_nav_menu("Header", "Header menu");

add_theme_support("automatic-feed-links");

define("HEADER_TEXTCOLOR", "EEEEEE");
define("HEADER_IMAGE", "%s/images/header.jpg");
define("HEADER_IMAGE_WIDTH", 786);
define("HEADER_IMAGE_HEIGHT", 104);

function nightskyline_header_style() {
	?>
		<style type="text/css">
			#title {
				min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
			}

			<?php if (get_header_image()) { ?>
				#title {
					background: url(<?php header_image(); ?>) repeat-x top left;
				}
			<?php }

			if (get_header_textcolor() != "blank") { ?>
				#title {
					color: #<?php header_textcolor(); ?>;
				}
			 <?php } else { ?>
				#title h1, #description {
					visibility: hidden;
				 }
			<?php } ?>

			@media only screen and (max-device-width: 480px) {
				#title {
					min-height: <?php echo HEADER_IMAGE_HEIGHT/2; ?>px;
					background-size: <?php echo HEADER_IMAGE_WIDTH/2; ?>px <?php echo HEADER_IMAGE_HEIGHT/2; ?>px;
				}
			}
		</style>
	<?php
}

function nightskyline_admin_header_style() {
	?>
		<style type="text/css">
			#headimg {
				background-color: black;
				min-height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
				text-align: center;
				text-shadow: 0 0 3px black;
				font-family: Georgia, serif;
				font-weight: bold;
				overflow: hidden;
			}

			#name {
				font-size: 48px;
			}

			#desc {
				font-size: 28px;
			}

			#headimg h1 a:link	{
				text-decoration: none;
			}

			#headimg h1 a:hover {
				text-decoration: underline;
			}
		</style>
	<?php
}

add_custom_image_header("nightskyline_header_style", "nightskyline_admin_header_style");
?>
