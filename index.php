<?php get_header(); ?>

<div id="posts">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<h2 class="storytitle"><a href="<?php the_permalink() ?>"
rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<p class="postdate"><?php the_date('','',''); ?> @ <?php the_time() ?></p>
		<?php the_content(__('(more...)')); ?>
         <?php wp_link_pages(); ?>
	   <p class="postcategory"><strong>Posted in <?php the_category(', ') ?></strong></p>
           <p class="postcomments"><strong>
           <?php comments_popup_link('No Comments &#187;', '1 Comment
                                      &#187;','% Comments &#187;'); ?>
           </strong></p>
</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div id="nextpage" class="post">
<h3><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></h3>
</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
