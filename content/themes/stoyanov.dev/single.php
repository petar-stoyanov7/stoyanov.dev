<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */

get_header(); ?>

    <main class="main-content ps-single">
        <div class="main-container-full">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content', 'single'); ?>
            <?php endwhile; ?>
        </div>
    </main>
<?php get_footer();
