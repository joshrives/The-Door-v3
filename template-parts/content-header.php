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
<header class="page-header <?php echo $GLOBALS['banner_type']; ?>">
	<?php if( !empty($GLOBALS['image']) ): ?>
	<img src="<?php echo $GLOBALS['image']['url']; ?>" alt="<?php echo $GLOBALS['image']['alt']; ?>" />
	<?php endif; ?>
	<div class="header-content">
		<?php echo $banner_content; ?>
		<?php if( is_tax('event-category')) { printf( __( 'Event Category: %s', 'eventorganiser' ), '<h1>' . single_cat_title( '', false ) . '</h1>' );} ?>
	</div>
</header>
