<div id="sidebar">
<div>
	<h3>Author</h3>
	<?php echo get_avatar(get_the_author_email(), 100) ?>
	<p><?php the_author_description(); ?></p>
</div>

<div>
	<h3>Twitter Updates</h3>
	<ul id="twitter_update_list"><li>Loading...</li></ul>
	<p><a href="http://twitter.com/mikearthur" rel="me external">Follow me on Twitter</a></p>
</div>

<div>
	<h3>Categories</h3>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>

	<h3>Search</h3>
	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
		<input type="text" name="s" id="s" size="12" />
		<input type="submit" value="<?php _e('?'); ?>" />
		</div>
	</form>

	<h3>Archives</h3>
	<ul>
	<?php wp_get_archives('type=monthly&limit=6&show_post_count=TRUE'); ?>
	</ul>
</div>

<div>
<?php get_links_list(); ?>
</div>

<div>
	<h3>Meta</h3>
	<?php wp_meta(); ?>
	<ul>

	<li><a href="feed/">
	<img src="<?php bloginfo('template_directory'); ?>/images/badges/rss.gif" alt="RSS feed" />
	</a></li>

	<li><a href="http://wordpress.org" rel="external">
	<img src="<?php bloginfo('template_directory'); ?>/images/badges/wordpress.gif" alt="Powered by Wordpress" />
	</a></li>

	<li><a href="http://kernel.org" rel="external">
	<img src="<?php bloginfo('template_directory'); ?>/images/badges/linux.gif" alt="Powered by Linux" />
	</a></li>

	<li><a href="http://validator.w3.org/check/referer?verbose=1" rel="external">
	<img src="<?php bloginfo('template_directory'); ?>/images/badges/w3cxhtml.gif" alt="Valid XHTML 1.0 Strict" />
	</a></li>

	</ul>
</div>

</div>
