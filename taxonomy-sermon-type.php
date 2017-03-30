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
		<?php
		if ( have_posts() ) : ?>
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
			<?php /* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

				 <div class="module-generic module-fifty message-archive">
		 			<div class="wrap group">
		 				<div class="half first">
							<h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="message-meta">
								<?php echo get_the_date(); ?> // <?php the_field('preacher_name'); ?>
							</div>
						</div>
						<div class="half">
							<?php the_content(); ?>
						</div>
					</div>
				</div>

			<?php endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div><!-- #primary -->

<?php
get_footer();
