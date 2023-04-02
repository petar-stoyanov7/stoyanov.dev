<?php

/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 0.0.1
 */

$post_class = '';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
    <h1>
        <?php the_title(); ?>
    </h1>
    <?php the_content(); ?>
</article>
