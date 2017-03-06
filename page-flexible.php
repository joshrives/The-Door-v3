<?php
/**
 * Template Name: Flexible
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
		if ( is_front_page() ) {
			get_template_part( 'template-parts/content', 'callout' );
		} ?>
		<div class="full-section">
			<?php if( have_rows('module') ):
				while ( have_rows('module') ) : the_row();
			if( get_row_layout() == 'mod_callout' ): ?>
			<div class="callout group <?php the_sub_field('callout_color'); ?>">
				<?php
					$link = get_sub_field('callout_link');
					if ($link) : ?>
				<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
						<symbol id="icon-circle-right" viewBox="0 0 32 32">
							<title>circle-right</title>
							<path class="path1" d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z"></path>
							<path class="path2" d="M11.086 22.086l2.829 2.829 8.914-8.914-8.914-8.914-2.828 2.828 6.086 6.086z"></path>
						</symbol>
					</defs>
				</svg>
				<a href = "<?php echo $link; ?>">
				<?php endif; ?>
					<?php the_sub_field('callout_text'); ?>
				<?php if($link) : ?>
					<svg class="icon icon-circle-right"><use xlink:href="#icon-circle-right"></use></svg>
				</a>
				<?php endif; ?>
			</div>
	        <?php elseif( get_row_layout() == 'mod_center_text' ): ?>
			<div class="module-centered-text">
				<div class="sm-wrap">
					<?php the_sub_field('center_content'); ?>
				</div>
			</div>
			<?php elseif( get_row_layout() == 'mod_half_text' ): ?>
			<div class="module-excerpt-overlay <?php the_sub_field('half_location'); ?>">
				<?php $halfimage = get_sub_field('half_image');
				if( !empty($halfimage) ): ?>
				<img src="<?php echo $halfimage['url']; ?>" alt="<?php echo $halfimage['alt']; ?>" />
				<?php endif; ?>
				<div class="excerpt-overlay">
					<header>
						<?php the_sub_field('content_header'); ?>
					</header>
					<?php the_sub_field('half_content'); ?>
				</div>
			</div>
			<?php elseif( get_row_layout() == 'mod_slider' ): ?>
			<div class="module-slider">
				<?php if( have_rows('slides') ): ?>
				<ul class="slider">
					<?php while ( have_rows('slides') ) : the_row();
					$url = get_sub_field('slider_url'); ?>
						<li>
							<?php if( !empty($url) ): ?>
							<a href = "<?php echo $url; ?>">
							<?php endif; ?>

							<?php $slide_image = get_sub_field('slider_image');
							if( !empty($slide_image) ): ?>
							<img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>" />
							<?php endif; ?>
							<div class="slider-caption">
								<h3><?php the_sub_field('slider_title'); ?></h3>
								<span><?php the_sub_field('slider_subtitle'); ?></span>
							</div>
							<?php if( !empty($url) ): ?>
							</a>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
			<?php elseif( get_row_layout() == 'mod_grid' ): ?>
			<div class="module-boxes">
				<?php if( have_rows('grid_box') ): ?>
					<ul class="box-list group">
						<?php while ( have_rows('grid_box') ) : the_row(); ?>
						<li>
							<div class="box-wrap">
								<?php the_sub_field('box_content'); ?>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<?php elseif( get_row_layout() == 'mod_with_background' ): ?>
			<div class="module-background-centered <?php the_sub_field('with_back_color'); ?> <?php the_sub_field('with_back_gradient'); ?>" <?php $back_image = get_sub_field('with_back_image'); if( !empty($back_image) ): ?>style="background-image: url('<?php echo $back_image['url']; ?>');"<?php endif; ?>>
				<div class="sm-wrap">
					<?php the_sub_field('with_back_content'); ?>
				</div>
			</div>
			<?php elseif( get_row_layout() == 'mod_event_slider' ): ?>
			<?php
				$events = eo_get_events(array(
					'numberposts'=> get_sub_field('number_of_events'),
					'events_start_after'=>'today',
					'showpastevents'=>false
				));
				if($events):
			?>
			<div class="module-slider events-slider">
				<h2><span>Upcoming Events</span></h2>
				<?php
		            $return= '<ul class="slider">';
	            	foreach ($events as $event):
	                	$term = get_the_terms( $event->ID, 'event-category' );
							$key = array_keys($term);
							$thisKey = $key[0];
							$thisCat = $term[$thisKey]->slug;

							$format = 'M j // g:ia';

	                	$return .= '<li><a title="'.$event->post_title.'" href="'.get_permalink($event->ID).'">'.get_the_post_thumbnail($event).'<div class="slider-caption"><h3>'.$event->post_title.'</h3><span>'.eo_format_date($event->StartDate.' '.$event->StartTime, $format).'</span></div></a></li>';
	            	endforeach;

	            	$return.='</ul>';
	            	echo $return;
	    		?>
			</div>
			<?php endif;?>
			<?php elseif( get_row_layout() == 'mod_title' ): ?>
			<div class="module-title group <?php the_sub_field('title_background'); ?>">
				<h2><span><?php the_sub_field('title_text'); ?></span></h2>
			</div>
			<?php elseif( get_row_layout() == 'mod_big_picture' ): ?>
				<?php
					$side = get_sub_field('title_background');
					$sideImage = get_sub_field('big_image');
					$sideContent = get_sub_field('big_content');
				?>
			<div class="module-text group">
				<?php if ($side == "left") : ?>
				<div class="fifty">
					<img src="<?php echo $sideImage['url']; ?>" alt="<?php echo $sideImage['alt']; ?>" />
				</div>
				<div class="fifty text-content">
					<?php echo $sideContent; ?>
				</div>
				<?php else : ?>
				<div class="fifty text-content">
					<?php echo $sideContent; ?>
				</div>
				<div class="fifty">
					<img src="<?php echo $sideImage['url']; ?>" alt="<?php echo $sideImage['alt']; ?>" />
				</div>
				<?php endif; ?>
			<?php elseif( get_row_layout() == 'mod_three_list' ): ?>
				<div class="module-three-list">
					<?php if( have_rows('three_item') ): ?>
					<ul class="threes group">
						<?php while ( have_rows('three_item') ) : the_row(); ?>
						<li>
							<?php the_sub_field('three_content'); ?>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			<?php elseif( get_row_layout() == 'mod_big_video' ): ?>
				<div class="module-video">
					<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<defs>
							<symbol id="icon-play-circle-o" viewBox="0 0 27 32">
								<title>play-circle-o</title>
								<path class="path1" d="M21.143 16q0 0.661-0.571 0.982l-9.714 5.714q-0.268 0.161-0.571 0.161-0.286 0-0.571-0.143-0.571-0.339-0.571-1v-11.429q0-0.661 0.571-1 0.589-0.321 1.143 0.018l9.714 5.714q0.571 0.321 0.571 0.982zM23.429 16q0-2.643-1.304-4.875t-3.536-3.536-4.875-1.304-4.875 1.304-3.536 3.536-1.304 4.875 1.304 4.875 3.536 3.536 4.875 1.304 4.875-1.304 3.536-3.536 1.304-4.875zM27.429 16q0 3.732-1.839 6.884t-4.991 4.991-6.884 1.839-6.884-1.839-4.991-4.991-1.839-6.884 1.839-6.884 4.991-4.991 6.884-1.839 6.884 1.839 4.991 4.991 1.839 6.884z"></path>
							</symbol>
						</defs>
					</svg>
					<div class="video-placeholder">
						<?php $vidimage = get_sub_field('video_placeholder');
						if( !empty($vidimage) ): ?>
						<img src="<?php echo $vidimage['url']; ?>" alt="<?php echo $vidimage['alt']; ?>" />
						<?php endif; ?>
						<a href = "#" class="video-trigger" data-video="<?php the_sub_field('video_code'); ?>"><?php the_sub_field('video_text'); ?> <svg class="icon icon-play-circle-o"><use xlink:href="#icon-play-circle-o"></use></svg></a>
					</div>
					<div class="video-container">
					</div>
				</div>
			<?php elseif( get_row_layout() == 'mod_half_half' ): ?>
				<div class="module-generic module-fifty">
					<div class="wrap group">
						<div class="half first">
							<?php the_sub_field('half_first'); ?>
						</div>
						<div class="half">
							<?php the_sub_field('half_second'); ?>
						</div>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'mod_two_third' ): ?>
				<div class="module-generic module-two-third">
					<div class="wrap group">
						<?php if(get_sub_field('which_first') == "two-third") : ?>
						<div class="two-third first">
							<?php the_sub_field('two_third_content'); ?>
						</div>
						<div class="third">
							<?php the_sub_field('third_content'); ?>
						</div>
						<?php else: ?>
						<div class="third first">
							<?php the_sub_field('third_content'); ?>
						</div>
						<div class="two-third">
							<?php the_sub_field('two_third_content'); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php elseif( get_row_layout() == 'mod_divider' ): ?>
				<hr />
	        <?php endif; ?>

	    <?php endwhile; ?>

	<?php endif; ?>

	</div><!-- #primary -->

<?php
get_footer();
