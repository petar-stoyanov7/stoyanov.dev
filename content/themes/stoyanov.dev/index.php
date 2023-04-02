<?php
/**
 * The Main template file
 *
 * That's the very basic file for any WP theme.
 *
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Pesticide
 * @since Pesticide 0.0.1
 */

get_header();
?>

<main class="pest-content">
    <div class="pest-entry">
        <?php
        if (have_posts()) {
            while(have_posts()) {
                the_post();
                get_template_part('template-parts/content', get_post_format());
            }
        } else {
            get_template_part('template-parts/content', 'none');
        }
        ?>
    </div>

    <div class="pest-pagination">
        <?php if (function_exists('pest_pagination')) : ?>
            <?php pest_pagination(); ?>
        <?php elseif(is_paged()) : ?>
            <nav class="pest-nav">
				<div class="pest-nav__previous">
                    <?php next_posts_link(__('&larr; Older posts', 'hlebarovpress')); ?>
                </div>
				<div class="pest-nav__next">
                    <?php previous_posts_link(__('Newer posts &rarr;', 'hlebarovpress')); ?>
                </div>
            </nav>
        <?php endif; ?>
    </div>
</main>


<?php get_footer(); ?>