<?php
/**
 * The default template for displaying page content
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>