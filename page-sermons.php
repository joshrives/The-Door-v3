<?php
/**
 * Template Name: Sermon Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php get_template_part( 'template-parts/content', 'header' ); ?>
		<?php

			$taxonomy = 'sermon-type';
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'orderby'       => 'ID',
				'order'         => 'DESC',
				'paged'			=> $paged,
				'posts_per_archive_page' => 4,
			);
			$terms = get_terms($taxonomy, $args); // Get all terms of a taxonomy

			if ( $terms && !is_wp_error( $terms ) ) :
		?>
		        <?php foreach ( $terms as $term ) { ?>
					<div class="module-generic module-two-third message-list">
						<div class="wrap group">
							<div class="two-third first">
								<?php $image = get_field('sermon_series_image', $taxonomy . '_' . $term->term_id ); ?>
				            	<img src = "<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
							</div>
							<div class="third">
								<h2><?php echo $term->name; ?></h2>
								<a href="<?php echo get_term_link($term->slug, $taxonomy); ?>" class="btn">View Series</a>
							</div>
						</div>
					</div>
		        <?php } ?>
		<?php endif;?>

	</div><!-- #primary -->

<?php
get_footer();
