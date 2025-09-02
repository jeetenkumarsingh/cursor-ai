<?php
/**
 * The template for displaying comments
 */

// If the current post is protected by a password and the visitor has not entered the password, return early.
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ('1' === $comment_count) {
                printf(
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'second-home-stories'),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            } else {
                printf(
                    esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'second-home-stories')),
                    number_format_i18n($comment_count),
                    '<span>' . wp_kses_post(get_the_title()) . '</span>'
                );
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 60,
            ));
            ?>
        </ol>

        <?php
        // Are there comments to navigate through?
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
            ?>
            <nav class="comment-navigation" aria-label="<?php esc_attr_e('Comment navigation', 'second-home-stories'); ?>">
                <div class="nav-previous"><?php previous_comments_link(esc_html__('← Older Comments', 'second-home-stories')); ?></div>
                <div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments →', 'second-home-stories')); ?></div>
            </nav>
            <?php
        endif;
        ?>

    <?php endif; ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note.
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'second-home-stories'); ?></p>
        <?php
    endif;

    comment_form(array(
        'title_reply' => esc_html__('Leave a Comment', 'second-home-stories'),
        'title_reply_to' => esc_html__('Reply to %s', 'second-home-stories'),
        'cancel_reply_link' => esc_html__('Cancel Reply', 'second-home-stories'),
        'label_submit' => esc_html__('Post Comment', 'second-home-stories'),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__('Comment', 'second-home-stories') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required" placeholder="' . esc_attr__('Enter your comment here...', 'second-home-stories') . '"></textarea></p>',
        'comment_notes_before' => '<p class="comment-notes">' . esc_html__('Your email address will not be published. Required fields are marked *', 'second-home-stories') . '</p>',
    ));
    ?>

</div><!-- #comments -->