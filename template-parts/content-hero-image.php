<?php
/**
 * Template part for displaying main callout on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

?>
<?php

$home_banner = get_field('page_image');

if( !empty($home_banner) ):

	$url = $home_banner['url'];

endif; ?>

<div class="hero-image group <?php the_field('banner_color'); ?>" style="background-image: url(<?php echo $url; ?>);">
	<div class="hero-content">
		<?php the_field('banner_content'); ?>
	</div>
