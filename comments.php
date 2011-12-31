<div id="comments">
    <?php if (post_password_required()) { ?>
        <p><?php _e("Enter your password to view any comments."); ?></p>
        <?php return;
    } ?>

    <?php if (have_comments()) { ?>
        <div class="commentlist">
            <?php wp_list_comments(array("avatar_size"=>48,"style"=>"div")); ?>
        </div>
    <?php } ?>

    <?php comment_form(); ?>
</div>
