<?php get_header(); ?>

<div id="main">
	<div id="content">
		<?php if (have_posts()) {
			if (is_search()) { ?>
				<div id="search_query">
					<h2>Search results for: <?php the_search_query(); ?></h2>
				</div>
			<?php }
			while (have_posts()) {
				the_post(); ?>
				<div <?php post_class(); ?>>
					<h2 class="entry_title">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					<?php if (!is_page()) { ?>
					<p class="post_date">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							<?php the_date(); ?> at <?php the_time() ?>
						</a>
					</p>
					<?php }
					the_content('Read More');
					wp_link_pages();
					if (!is_page() && get_the_category()) { ?>
						<p class="post_category">Posted in <?php the_category(', '); ?></p>
					<?php }
					if (!is_page() && get_the_tags()) { ?>
						<p class="post_tags"><?php the_tags(); ?></p>
					<?php }
					if(get_comments_number() > 0 || comments_open()) { ?>
						<p class="comments_link"><?php comments_popup_link(); ?></p>
					<?php } ?>
				</div>
				<?php comments_template();
			}
		} else { ?>
			<div>
				<h2>No Posts Found</h2>
				<p>Sorry, no posts matched your criteria.</p>
				<?php get_search_form(); ?>
			</div>
		<?php } ?>

		<div id="page_nav">
			<h3><?php posts_nav_link(); ?></h3>
		</div>
	</div>
</div>

<?php get_footer(); ?>
