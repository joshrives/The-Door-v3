<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Door_v3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else {
				echo '<img src = "http://thedoorchurch.net/wp-content/uploads/2013/11/tristan-square.png">';
			}

		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
		<div class="entry-meta">
			<?php
			if( eo_reoccurs() ){
				echo 'Next Occurence: ';
				echo eo_get_next_occurrence('F jS, Y');
				echo ' from ';
				echo eo_get_the_start('g:ia');
				echo ' - ';
				echo eo_get_the_end('g:ia');
			} elseif (eo_get_the_start('F jS, Y') !== eo_get_the_end('F jS, Y')) {
				if(eo_is_all_day) {
					echo eo_get_the_start('F jS, Y');
				} else {
					echo eo_get_the_start('F jS, Y');
					echo ' at ';
					echo eo_get_the_start('g:ia');
					echo ' to ';
					echo eo_get_the_end('F jS, Y');
					echo ' at ';
					echo eo_get_the_end('g:ia');
				}
			} else {
				if(eo_is_all_day) {
					echo eo_get_the_start('F jS, Y');
				} else {
					echo eo_get_the_start('F jS, Y');
					echo ' from ';
					echo eo_get_the_start('g:ia');
					echo ' - ';
					echo eo_get_the_end('g:ia');
				}
			}
			?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-door-v3' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-door-v3' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_door_v3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
