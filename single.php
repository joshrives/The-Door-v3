<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Door_v3
 */

get_header('blog'); ?>

	<div id="primary" class="content-area">
		<?php get_template_part( 'template-parts/content', 'header' ); ?>
		<div class="wrap group">
			<div class="blog-main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'blog-single' );

				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<!-- <div class="blog-sidebar">
				<?php //get_sidebar(); ?>
			</div> -->
		</div>
	</div><!-- #primary -->

<?php

get_footer();
