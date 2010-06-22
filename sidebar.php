<div id="sidebar">
<div id="blogbar">
	<h2>Search</h2>
	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
		<input type="text" name="s" id="s" size="12" />
		<input type="submit" value="<?php _e('?'); ?>" />
		</div>
	</form>

	<h2>Categories</h2>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>

	<h2>Copyright</h2>
	<ul>
	<li><a href="mailto:mike@mikemcquaid.com">Mike McQuaid</a> &copy; 2010</li>
	</ul>
	<ul>
	<li><a href="http://creativecommons.org/licenses/by-nc-sa/2.0/uk/">CC-BY-NC-SA</a> license</li>
	</ul>
</div>

<div id="linkbar">
	<ul>
	<?php get_links_list(); ?>
	</ul>

	<h2>Meta</h2>
	<?php wp_meta(); ?>
	<ul>

	<li><a href="/feed/">
	RSS feed
	</a></li>

	<li><a href="http://wordpress.org" rel="external">
	Wordpress powered
	</a></li>

	<li><a href="http://kernel.org" rel="external">
	Linux powered
	</a></li>

	<li><a href="http://validator.w3.org/check/referer?verbose=1" rel="external">
	XHTML valid
	</a></li>

	</ul>
</div>
</div>
