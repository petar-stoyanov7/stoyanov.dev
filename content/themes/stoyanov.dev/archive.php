<?php

/**
 * The template for displaying archive pages
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */

get_header();
$queriedObj = get_queried_object();
$title = '';

if (is_a( $queriedObj, 'WP_Term')) {
    switch($queriedObj->taxonomy) {
        case 'category':
            $prefix = 'Category: ';
            break;
        case 'post_tag':
            $prefix = 'Tag: ';
            break;
        default:
            $prefix = '';
            break;
    }
    $title = "{$prefix}{$queriedObj->name}";
} elseif (is_a($queriedObj, 'WP_User')) {
    $title = "Posts by {$queriedObj->data->display_name}";
}
?>

    <main class="main-content ps-archives">
        <div class="main-container">
            <div
                class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3 xhuge-up-4 ps-archives__container"
            >
                <h1 class="ps-archives__title">
                    <?php echo $title; ?>
                </h1>
                <?php if (have_posts()) : ?>
                    <?php
                    while(have_posts()) {
                        the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                    ?>
                <?php else : ?>
                    <?php get_template_part('template-parts/content', 'none'); ?>
                <?php endif; ?>
            </div>

            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <div class="grid-x">
                <div class="cell small-6 small-offset-3">
                    <?php
                    if (function_exists('hlebarovpress_pagination')) :
                        hlebarovpress_pagination();
                    elseif (is_paged()) :
                        ?>
                        <nav id="post-nav">
                            <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'hlebarovpress')); ?></div>
                            <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'hlebarovpress')); ?></div>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();
