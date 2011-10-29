<?php
if (function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'=>'LeftFooterSideBar',
        'description'=>'NightSkyLine Left Footer SideBar'
    ));
    register_sidebar(array(
        'name'=>'RightFooterSideBar',
        'description'=>'NightSkyLine Right Footer SideBar'
    ));
}

if (function_exists('wp_nav_menu')) {
    register_nav_menu('Header', 'NightSkyLine Header Menu');
}

function nightskyline_search_form ($form) {
# Correct invalid XHTML (as of 3.0.1) in search widget
    $name = get_bloginfo('name');
    $xhtml5search = str_replace('role="search" ', '', $form);
    $xhtml5search = str_replace('type="text"', 'type="search"', $xhtml5search);
    $xhtml5search = str_replace('value=""', "value=\"\" placeholder=\"$name\" required=\"required\"", $xhtml5search);
    return $xhtml5search;
}
//add_filter('get_search_form', 'nightskyline_search_form');

add_theme_support('automatic-feed-links');

define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', '%s/images/header.jpg');
define('HEADER_IMAGE_WIDTH', 786);
define('HEADER_IMAGE_HEIGHT', 104);

function nightskyline_header_style() {
    ?>
        <style type="text/css">
            #title {
                background: url(<?php header_image(); ?>) repeat-x top left;
                height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
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
                background: no-repeat;
            }
        </style>
    <?php
}

add_custom_image_header('nightskyline_header_style', 'nightskyline_admin_header_style');
?>
