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
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

				 <div class="module-generic module-fifty message-archive">
		 			<div class="wrap group">
		 				<div class="half first">
							<h2><?php the_title(); ?></h2>
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
