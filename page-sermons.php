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
