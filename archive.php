<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_template_part( 'template-parts/content', 'header' ); ?>
		<div class="wrap group">
		<?php if ( have_posts() ) :?>
			<div class="blog-main">
				<div class="callout group black">
					<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<defs>
							<symbol id="icon-circle-right" viewBox="0 0 32 32">
								<title>circle-right</title>
								<path class="path1" d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z"></path>
								<path class="path2" d="M11.086 22.086l2.829 2.829 8.914-8.914-8.914-8.914-2.828 2.828 6.086 6.086z"></path>
							</symbol>
						</defs>
					</svg>
					<a href = "http://thedoorchurch.net/join-mailing-list/">KEEP UP WITH THE WAYS GOD IS MOVING IN OUR COMMUNITY. JOIN OUR MAILING LIST.<svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg></a>
				</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div>
			<div class="blog-sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #primary -->

<?php

get_footer();
