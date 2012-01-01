<?php get_header(); ?>

<div id="posts">
    <div id="pagenotfound">
        <h2 class="storytitle">404 Monkey</h2>
        <p><img src="<?php bloginfo("template_directory"); ?>/images/404monkey.jpg" alt="404 MONKEY" /></p>
        <p>Me look very hard! No find your page?</p>
        <p>Where is the page?</p>
        <p>You type wrong in address bar?</p>
        <p>Try search instead, maybe find page?</p>
        <?php get_search_form(); ?>
    </div>
</div>

<?php get_footer(); ?>
