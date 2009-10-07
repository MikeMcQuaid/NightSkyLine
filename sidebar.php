<div id="sidebar">
<ul>
<?php
//If we are using a dynamic sidebar use that instead
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
?>

<li>
	<h2>Author</h2>
	<?php echo get_avatar(get_the_author_email(), 100) ?>
	<p><?php the_author_description(); ?></p>
</li>

<li>
	<h2>Twitter Updates</h2>
	<ul id="twitter_update_list"><li>Loading...</li></ul>
	<p><a href="http://twitter.com/mikearthur" rel="me external">Follow me on Twitter</a></p>
</li>

<li>
	<h2>Categories</h2>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
</li>

<li>
	<h2>Search</h2>
	<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div>
		<input type="text" name="s" id="s" size="12" />
		<input type="submit" value="<?php _e('?'); ?>" />
		</div>
	</form>
</li>

<li>
	<h2>Archives</h2>
	<ul>
	<?php wp_get_archives('type=monthly&limit=6&show_post_count=TRUE'); ?>
	</ul>
</li>

<?php get_links_list(); ?>

<li>
	<h2>Meta</h2>
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
</li>

<?php endif; ?>
</ul>
</div>
