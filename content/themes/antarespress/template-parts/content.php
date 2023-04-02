<?php
/**
 * The default template for displaying content
 *
 * @package Pesticide
 * @since Pesticide 0.0.1
 */

$post_class = 'pest-article';
?>

<article
    id="<?php the_ID(); ?>"
    <?php post_class($post_class); ?>
>
    <div class="pest-article__content">
        <h1>
            <?php the_title(); ?>
        </h1>
        <p>
            <?php the_content(); ?>
        </p>
    </div>
</article>

