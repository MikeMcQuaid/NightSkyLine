<div id="sidebar">
<div class="footerbar">
	<h2>Author</h2>
	<?php echo get_avatar(get_the_author_email(), 100) ?>
	<p><?php the_author_description(); ?></p>

	<h2>Twitter</h2>
	<ul id="twitter_update_list"><li>Loading...</li></ul>
	<p><a href="http://twitter.com/mikearthur" rel="me external">Follow me on Twitter</a></p>
</div>


<div class="footerbar">
<?php get_links_list(); ?>

	<h2>Meta</h2>
	<?php wp_meta(); ?>
	<ul>

	<li><a href="feed/">
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

<div class="footerbar">
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

	<h2>Archives</h2>
	<ul>
	<?php wp_get_archives('type=monthly&limit=10&show_post_count=TRUE'); ?>
	</ul>
</div>

</div>
