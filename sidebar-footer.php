<div id="sidebar">
    <div id="leftbar">
        <div class="sidebartext">
            <ul>
                <?php if (!dynamic_sidebar("Footer Left")) { ?>
                    <li><ul><?php wp_list_bookmarks(); ?></ul></li>
                    <li>
                        <h2>Meta</h2>
                        <?php wp_meta(); ?>
                        <ul>
                            <li><a href="<?php bloginfo("rss_url"); ?>">RSS feed</a></li>
                            <li><a href="https://github.com/mikemcquaid/NightSkyLine/">Using NightSkyLine theme</a></li>
                            <li><a href="http://wordpress.org" rel="external">
                                Powered by WordPress
                            </a></li>
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
                    <li>
                        <h2>Search</h2>
                        <?php get_search_form(); ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div id="clearbar"></div>
</div>
