<?php get_header(); ?>

<div id="posts">
    <div <?php post_class(); ?>>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="storytitle">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo $post->post_title; ?>">
                    <?php echo $post->post_title; ?>
                </a>
            </h2>
            <?php the_content(__('(more...)')); ?>
            <?php wp_link_pages(); ?>
        <?php endwhile; else: ?>
            <p>
                <?php _e('Sorry, no pages matched your criteria.'); ?>
            </p>
        <?php endif; ?>
    </div>
</div>

<?php get_sidebar("footer"); ?>
<?php get_footer(); ?>
