<div id="sidebar">
	<div id="leftbar">
		<div class="sidebartext">
			<ul>
				<?php if (!dynamic_sidebar("Footer Left")) { ?>
					<li class="widget_search">
						<h2>Search</h2>
						<?php get_search_form(); ?>
					</li>
					<li>
						<h2>Meta</h2>
						<?php wp_meta(); ?>
						<ul>
							<li><a href="<?php bloginfo("rss_url"); ?>">RSS feed</a></li>
							<li><a href="https://github.com/mikemcquaid/NightSkyLine/">NightSkyLine theme</a></li>
							<li><a href="http://wordpress.org" rel="external">WordPress</a></li>
						</ul>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<div id="rightbar">
		<div class="sidebartext">
			<ul>
				<?php if (!dynamic_sidebar("Footer Right")) { ?>
					<li><ul><?php wp_list_bookmarks(); ?></ul></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="clearboth"></div>
</div>
