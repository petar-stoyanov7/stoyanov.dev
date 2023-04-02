<?php
/**
 * This is the template that displays all pages by default.
 * This template is the same as page-full-width.php
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */


get_header(); ?>

<main class="main-content-full-width">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('template-parts/content', 'page'); ?>
	<?php endwhile; ?>
</main>
<?php get_footer();
