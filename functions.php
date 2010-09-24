<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(array('name'=>'LeftFooterSideBar','description'=>'NightSkyLine Left Footer SideBar'));
	register_sidebar(array('name'=>'RightFooterSideBar','description'=>'NightSkyLine Right Footer SideBar'));
}

if ( function_exists('wp_nav_menu') ) {
	register_nav_menu('Header', 'NightSkyLine Header Menu');
}

# Correct invalid XHTML (as of 3.0.1) in search widget
function valid_search_form ($form) {
	$name = get_bloginfo('name');
	$xhtml5search = str_replace('role="search" ', '', $form);
	$xhtml5search = str_replace('type="text"', 'type="search"', $xhtml5search);
	$xhtml5search = str_replace('value=""', "value=\"\" placeholder=\"$name\" required=\"required\"", $xhtml5search);
	return $xhtml5search;
}
add_filter('get_search_form', 'valid_search_form');
?>
