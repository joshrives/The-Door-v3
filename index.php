<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <?php get_template_part( 'template-parts/content', 'header' ); ?>
		<div class="post-navigation">
			<?php
				// the query
				$wp_query = new WP_Query(array(
					'post_type'=>'post',
					'post_status'=>'publish',
					'posts_per_page'=>-1));
				?>

				<?php if ( $wp_query->have_posts() ) : ?>

				<ul class="blog-list group">
					<!-- the loop -->
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>" class="group">
								<?php the_post_thumbnail(); ?>
								<div>
									<h4><?php the_title(); ?></h4>
									<?php the_excerpt(); ?>
									<span>Read More</span>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
					<!-- end of the loop -->
				</ul>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		</div>
    </div><!-- #primary -->

<?php

get_footer();
