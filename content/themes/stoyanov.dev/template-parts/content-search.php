<?php
/**
 * The  template for displaying search entry
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */

$postId = get_the_ID();
$featuredImage = get_the_post_thumbnail_url($postId);
$excerpt = get_the_excerpt($postId);
$excerpt = wp_trim_words($excerpt, 30, '...');
?>

<article class="cell ps-archive ps-search">
    <a
        href="<?php echo get_the_permalink($postId); ?>"
        class="ps-archive__link"
    >
        <div class="ps-archive__text">
            <h3 class="ps-archive__title">
                <?php the_title(); ?>
            </h3>
            <span class="ps-archive__excerpt">
				<?php echo $excerpt; ?>
			</span>
        </div>
    </a>
</article>