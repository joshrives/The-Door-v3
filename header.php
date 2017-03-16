<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Door_v3
 */

	if ( is_home() ) {
		$GLOBALS['image'] = get_field('page_image', get_option('page_for_posts'));
		$GLOBALS['banner_type'] = get_field('banner_color', get_option('page_for_posts'));
	} else {
		$GLOBALS['image'] = get_field('page_image');
		$GLOBALS['banner_type'] = get_field('banner_color');
	}
	if(is_tax('sermon-type') || is_tax('event-category')) {
		$queried_object = get_queried_object();
		$taxonomy = $queried_object->taxonomy;
		$term_id = $queried_object->term_id;

		// load thumbnail for this taxonomy term (term string)
		$GLOBALS['image'] = get_field('sermon_series_image', $taxonomy . '_' . $term_id);
		$GLOBALS['banner_type'] = get_field('header_color', $taxonomy . '_' . $term_id);
	}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Oswald:300" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site<?php if( empty($GLOBALS['image']) ): ?> no-banner<?php endif; ?> <?php echo $GLOBALS['banner_type']; ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-door-v3' ); ?></a>
	<div class="header-container">

		<?php
		if ( is_front_page() ) {
			get_template_part( 'template-parts/content', 'hero-image' );
		} ?>

			<div class="wrap">
				<header id="masthead" class="site-header<?php if(!empty($GLOBALS['image'])){echo ' with-image';} ?>" role="banner">
					<div class="site-branding">
						<?php
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'the-door-v3' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</header><!-- #masthead -->
			</div><!--group-->

		<?php
		if ( is_front_page() ) { ?>
			</div>
		<?php } ?>

	</div><!--header-container-->
	<?php if ( is_front_page() ) { ?>
		<div id="content" class="site-content home-page-content">
	<?php } else { ?>
		<div id="content" class="site-content">
	<?php } ?>
