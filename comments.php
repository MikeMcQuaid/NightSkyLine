<div id="comments">
	<?php if (post_password_required()) { ?>
		<p>Enter your password to view any comments.</p>
		<?php return;
	} ?>

	<?php if (have_comments()) { ?>
		<div id="comments_list">
			<?php wp_list_comments(array("avatar_size"=>48,"style"=>"div")); ?>
		</div>
		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>
			<div>
				<?php paginate_comments_links(); ?>
			</div>
		<?php }
	} ?>

	<?php comment_form(); ?>
</div>
