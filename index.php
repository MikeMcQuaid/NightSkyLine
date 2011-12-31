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
                <?php if (!is_page()) { ?>
                <p class="postdate">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_date(); ?> at <?php the_time() ?>
                    </a>
                </p>
                <?php }
                the_content('Read More');
                wp_link_pages();
                if (!is_page() && get_the_category()) { ?>
                    <p class="postcategory">Posted in <?php the_category(', '); ?></p>
                <?php }
                if (get_the_tags()) { ?>
                    <p class="posttags"><?php the_tags(); ?></p>
                <?php }
                if(get_comments_number() > 0 || comments_open()) { ?>
                    <p class="postcomments"><?php comments_popup_link(); ?></p>
                <?php } ?>
            </div>
            <?php comments_template();
        }
    } else { ?>
        <div id="noposts">
            <h2>No Posts Found</h2>
            <p>Sorry, no posts matched your criteria.</p>
        </div>
    <?php } ?>

    <div id="nextpage">
        <h3><?php posts_nav_link(); ?></h3>
    </div>
</div>

<?php get_footer(); ?>
