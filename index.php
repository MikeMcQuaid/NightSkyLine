<?php get_header(); ?>

<div id="posts">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div <?php post_class(); ?>>
                <h2 class="storytitle">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <p class="postdate">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_date(); ?> @ <?php the_time() ?>
                    </a>
                </p>
                <?php the_content(__('(more...)'));
                wp_link_pages();
                if (!is_page() && get_the_category()) { ?>
                    <p class="postcategory">
                        <strong>Posted in <?php the_category(', '); ?></strong>
                    </p>
                <?php }
                if (get_the_tags()) { ?>
                    <p class="posttags">
                        <strong><?php the_tags(); ?></strong>
                    </p>
                <?php }
                if(get_comments_number() > 0 || comments_open()) { ?>
                    <p class="postcomments">
                        <strong><?php comments_popup_link(); ?></strong>
                    </p>
                <?php } ?>
            </div>
            <?php comments_template();
        }
    } else { ?>
        <div id="noposts">
            <h2>No Posts Found</h2>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        </div>
    <?php } ?>

    <div id="nextpage">
        <h3><?php posts_nav_link(); ?></h3>
    </div>
</div>

<?php get_footer(); ?>
