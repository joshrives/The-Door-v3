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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-door-v3' ); ?></a>
	<?php $thumbnail = get_the_post_thumbnail_url(); ?>
	<div class="header-container blog-single-header" style="background-image: url('<?php echo $thumbnail; ?>');">
		<div class="single-blog-tagline">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p><?php the_field('post_author'); ?></p>
		</div><!-- .site-tagline -->
		<div class="wrap">
			<?php $thumbnail = get_the_post_thumbnail_url(); ?>
			<header id="masthead" class="site-header with-image" role="banner">
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
	</div><!--header-container-->

	<div id="content" class="site-content">
