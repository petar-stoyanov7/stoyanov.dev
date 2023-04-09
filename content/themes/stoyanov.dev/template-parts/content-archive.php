<?php
/**
 * The  template for displaying archive entry
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */

$postId = get_the_ID();
$featuredImage = get_the_post_thumbnail_url($postId, 'fp-small');
$featuredImage = empty($featuredImage) ?
	get_stylesheet_directory_uri() . '/dist/assets/images/blog-default.jpg' :
	$featuredImage;
$excerpt = get_the_excerpt($postId);
$excerpt = wp_trim_words($excerpt, 30, '...');
?>

<article class="cell ps-archive code-template">
	<a
		href="<?php echo get_the_permalink($postId); ?>"
		class="ps-archive__link"
	>
		<figure class="ps-archive__header">
			<img src="<?php echo $featuredImage; ?>" alt="">
		</figure>
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
