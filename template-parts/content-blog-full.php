<?php
/**
 * Template part for displaying page banners.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */
	if ( is_home() ) {
		$banner_content = get_field('banner_content', get_option('page_for_posts'));
	} else {
		$banner_content = get_field('banner_content');
	}
?>
<header class="page-header blog-header">

	<?php

	$banner_image = get_field('blog_banner_image');

	if( !empty($banner_image) ): ?>

		<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />

	<?php endif; ?>

	<div class="header-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<p><?php the_field('blog_sub_header'); ?></p>
	</div>

</header>
