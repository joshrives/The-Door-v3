<?php
/**
 * Template part for displaying main callout on home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

?>
<div class="callout main-callout group">
	<ul class="service-details">
		<li>
			<strong>Service Times</strong>
			<span><?php the_field('service_times'); ?></span>
		</li>
		<?php
			$args = array( 'post_type' => 'sermon', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$terms = wp_get_post_terms(get_the_id(), 'sermon-type', array("fields" => "all"));
				$seriesName = $terms[0]->name;
				$seriesID = $terms[0]->term_id;
				$seriesLink = get_term_link($seriesID);

		?>

		<?php endwhile; // end of the loop.
			wp_reset_postdata();
		?>
		<li>
			<strong>Series</strong>
			<a href = "<?php echo $seriesLink; ?>"><?php echo $seriesName; ?></a>
		</li>
	</ul>
	<?php if( have_rows('social_links') ): ?>
	<ul class="callout-social">
		<?php while ( have_rows('social_links') ) : the_row(); ?>
		<li>
			<a href = "<?php the_sub_field('social_url'); ?>">
				<?php
				$socimage = get_sub_field('social_icon');
				if( !empty($socimage) ): ?>
					<img src="<?php echo $socimage['url']; ?>" alt="<?php echo $socimage['alt']; ?>" />
				<?php endif; ?>
				<span class="assistive-text"><?php the_field('social_name'); ?></span>
			</a>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php endif; ?>
</div>
</div>
