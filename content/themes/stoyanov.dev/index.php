<?php

/**
 * The main template file
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */

get_header();
?>

    <main class="main-content ps-archives ps-index">
        <div class="main-container">
            <div
                    class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3 xhuge-up-4 ps-archives__container"
            >
                <h1 class="ps-archives__title">
                    Posts
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

            <div class="grid-x">
                <div class="cell small-6 small-offset-3">
                    <?php if (function_exists('ps_pagination')) : ?>
                        <?php ps_pagination(); ?>
                    <?php elseif (is_paged()) : ?>
                        <nav id="post-nav">
                            <div class="post-previous"><?php next_posts_link("Older posts"); ?></div>
                            <div class="post-next"><?php previous_posts_link("Newer posts &rarr;"); ?></div>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();
