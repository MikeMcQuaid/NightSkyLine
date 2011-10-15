<div id="sidebar">
<div id="leftbar">
<div class="sidebartext">
	<ul>
	<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('LeftFooterSideBar')) : ?>
	<li>
	<h2>Search</h2>
	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
		<input type="search" name="s" id="s" value="" placeholder="Search <?php bloginfo('name'); ?>" required="required"/>
		<input type="submit" id="searchsubmit" value="<?php _e('Search'); ?>" />
		</div>
	</form>
	</li>

	<li>
	<h2>Categories</h2>
	<ul>
	<?php wp_dropdown_categories(); ?>
	</ul>
	</li>

	<li>
	<h2>Copyright</h2>
	<ul>
	<li><a href="https://github.com/mikemcquaid/NightSkyLine/">NightSkyLine theme</a></li>
	<li>&copy; <a href="http://mikemcquaid.com/">Mike McQuaid</a></li>
	</ul>
	</li>
	<?php endif; ?>
	</ul>
</div>
</div>

<div id="rightbar">
<div class="sidebartext">
	<ul>
	<?php if(!function_exists('dynamic_sidebar')||!dynamic_sidebar('RightFooterSideBar')) : ?>
	<li>
	<ul>
	<?php wp_list_bookmarks(); ?>
	</ul>
	</li>

	<li>
	<h2>Meta</h2>
	<?php wp_meta(); ?>
	<ul>

	<li><a href="/feed/">
	RSS feed
	</a></li>

	<li><a href="http://wordpress.org" rel="external">
	Wordpress powered
	</a></li>

	</ul>
	</li>
	<?php endif; ?>
	</ul>
</div>
</div>
<div id="clearbar"></div>
</div>
