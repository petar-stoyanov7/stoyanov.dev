<?php
/**
 * Template for showing social media icons
 *
 * @package Stoyanov.dev
 * @since Stoyanov.dev 1.0.0
 */


$title = !empty($args['title']) ? $args['title'] : false;
$link = !empty($args['link']) ? urlencode($args['link']) : false;

if (!$title || !$link) {
	return;
}
?>

<div class="ps-socials">
	<h5 class="ps-socials__title">
		Share with:
	</h5>
	<ul class="ps-socials__list">
		<li class="ps-socials__item">
			<a
				class="ps-socials__link social-facebook"
				href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>"
				target="_blank"
			>
			</a>
		</li>
		<li class="ps-socials__item">
			<a
				class="ps-socials__link social-twitter"
				href="https://twitter.com/intent/tweet?url=<?php echo $link; ?>"
				target="_blank"
			>
			</a>
		</li>
		<li class="ps-socials__item">
			<a
				class="ps-socials__link social-linkedin"
				href="https://www.linkedin.com/shareArticle?url=<?php echo $link; ?>&title=<?php echo $title; ?>"
				target="_blank"
			>
			</a>
		</li>
	</ul>
</div>
