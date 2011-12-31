<?php
register_sidebar(array(
    "name"=>"Footer Left",
    "description"=>"Left side of the footer"
));
register_sidebar(array(
    "name"=>"Footer Right",
    "description"=>"Right side of the footer"
));

register_nav_menu("Header", "Header menu");

add_theme_support("automatic-feed-links");

define("HEADER_TEXTCOLOR", "ffffff");
define("HEADER_IMAGE", "%s/images/header.jpg");
define("HEADER_IMAGE_WIDTH", 786);
define("HEADER_IMAGE_HEIGHT", 104);

function nightskyline_header_style() {
    ?>
        <style type="text/css">
            #title {
                background: url(<?php header_image(); ?>) repeat-x top left;
                height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            }
            @media only screen and (max-device-width: 480px) {
                #title {
                    height: <?php echo HEADER_IMAGE_HEIGHT/2; ?>px;
                }
            }
        </style>
    <?php
}

function nightskyline_admin_header_style() {
    ?>
        <style type="text/css">
            #headimg {
                width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
                height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
                text-align: center;
                text-shadow: 0 0 1px black;
                font-family: Georgia, serif;
                font-weight: bold;
                color: #EEEEEE;
		background-color: inherit;
            }

            #name {
		font-size: 2em;
            }

            #desc {
	            font-size: 2.4em;
            }

            #headimg h1 a:link  {
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
