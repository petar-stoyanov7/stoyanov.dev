<?php
/**
 * The template for displaying single
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */

$postId = get_the_ID();
$categories = wp_get_post_categories($postId);
$categoryList = '';
$thumb = get_the_post_thumbnail_url($postId);
$date = get_the_date();
$date = date_create(get_the_date());
if (!empty($categories)) {
	$categoryList = '<span>';
	foreach ($categories as $cat) {
		$category = get_category($cat);
		$link = get_term_link($cat);
		$categoryList .= <<<html
<a href="{$link}">{$category->name}</a>
html;
	}
	$categoryList = rtrim($categoryList, ',');
	$categoryList .= '</span>';
}
$title = get_the_title();
$link = get_the_permalink();
?>

<article class="grid-x grid-margin-x grid-margin-y ps-single">
	<header class="ps-single__header cell small-12">
		<figure class="ps-single__header-cover">
			<img src="<?php echo $thumb; ?>" alt="">
		</figure>
		<div class="ps-single__header-text">
			<h1 class="ps-single__header-title">
				<?php echo $title; ?>
			</h1>
			<div class="ps-single__header-meta">
			<span>
				<?php echo date_format($date, 'd F Y'); ?>
			</span>
				<?php echo $categoryList; ?>
			</div>
		</div>
	</header>
	<div class="cell small-12 large-2 ps-single__socials">
		<?php get_template_part(
			'template-parts/template',
			'socials',
			[
				'title' => $title,
				'link' => $link
			]
		); ?>
	</div>
	<div class="cell small-12 large-8 ps-single__content">
		<?php
		the_content();
		wp_reset_postdata();
		get_template_part(
			'template-parts/template',
			'similar',
			[
				'categories' => $categories,
				'post-id' => $postId,
			]
		);
		?>
	</div>
</article>

