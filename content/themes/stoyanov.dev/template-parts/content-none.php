<?php

/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */

?>

<article class="cell ps-archive ps-none">
    <header class="page-header">
        <h2 class="page-title">
            <?php _e('Nothing Found', 'ps'); ?>
        </h2>
    </header>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p>
                <?php
                /* translators: %1$s: new post url */
                printf(
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ps'),
                    admin_url('post-new.php')
                );
                ?>
            </p>
        <?php elseif (is_search()) : ?>
            <p>
                We couldn't find what you're looking for.
            </p>
        <?php else : ?>
            <p>
                This page doesn't exist.
            </p>
        <?php endif; ?>
        <p>
            You can check the <a href="<?php echo get_post_type_archive_link('post'); ?>">Blog</a>.
            Or you can return <a href="<?php echo get_home_url(); ?>">Home</a>
        </p>
    </div>

</article>

