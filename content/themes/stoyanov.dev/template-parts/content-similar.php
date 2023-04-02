<?php
/**
 * Template for showing similar content
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */


wp_reset_postdata();
wp_reset_query();
$categories = !empty($args['categories']) ? $args['categories'] : false;
$postId = !empty($args['post-id']) ? $args['post-id'] : false;

$similarArgs = [
	'post_type' => 'post',
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => 4,
];
if (!empty($categories) && is_array($categories) && count($categories) > 0) {
	$similarArgs['category__in'] = $categories;
}
if ($postId) {
	$similarArgs['post__not_in'] = [$postId];
}
$similarQuery = new WP_Query($similarArgs);
?>
<div class="grid-container full ps-similar">
	<div class="ps-similar__title">
		<h2>Similar blog posts</h2>
	</div>
	<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3 xhuge-up-4 ps-similar__container">
		<?php
		if ($similarQuery->have_posts()) {
			while($similarQuery->have_posts()) {
				$similarQuery->the_post();
				get_template_part('template-parts/content', 'archive');
			}
		}
		?>
	</div>
</div>

