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

		<header class="page-header">
			<?php if( !empty($GLOBALS['image']) ): ?>
			<img src="<?php echo $GLOBALS['image']['url']; ?>" alt="<?php echo $GLOBALS['image']['alt']; ?>" />
			<?php endif; ?>
			<div class="header-content">
				<p>Existing to see</p>
				<h2>Lives Restored By the Gospel for God's Glory</h2>
				<a href = "#" class="clear-btn">Learn More About the Door Church</a>
			</div>
		</header>
		<div class="full-section">
			<div class="callout main-callout group">
				<ul class="service-details">
					<li>
						<strong>Service Times</strong>
						<span>Saturday 5P | Sunday 8:30A &amp; 10A</span>
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
				<ul class="callout-social">
					<li><a href = "#">Facebook</a></li>
					<li><a href = "#">Twitter</a></li>
					<li><a href = "#">Vimeo</a></li>
				</ul>
			</div>
		</div>
		<div class="module-centered-text">
			<div class="sm-wrap">
				<p>Welcome to The Door Church. Our mission is to see lives restored by the gospel for God’s glory. We are committed to being and making disciples. Disciples are people who are so in love with Jesus, they have decided that the most important thing in their lives is to learn how to do what Jesus said to do. </p>
				<a href = "#" class="white-btn">Learn More About the Door Church</a>
			</div>
		</div>
		<div class="module-excerpt-overlay">
			<img src = "http://placehold.it/1920x960">
			<div class="excerpt-overlay">
				<header>
					<h3>Where God Met Me</h3>
					<h4>The day Brad Larson felt the Lord call him to write</h4>
				</header>
				<p>I was raised in rural Houston with a family who was nothing but loving all my life. We are also committed to helping people discover their gifts and calling, for the purpose of glorifying God in the world. As people surrender their lives to Jesus, God, through the power of His Spirit, invites them into the process.</p>
				<a href = "#" class="clear-btn">Continue Reading Brad's Story</a>
			</div>
		</div>
		<div class="module-slider">
			<ul class="slider">
				<li>
					<a href = "#">
						<img src = "http://placehold.it/600x400">
						<div class="slider-caption">
							<h3>Title</h3>
							<span>Subtitle</span>
						</div>
					</a>
				</li>
				<li>
					<a href = "#">
						<img src = "http://placehold.it/600x400">
						<div class="slider-caption">
							<h3>Title</h3>
							<span>Subtitle</span>
						</div>
					</a>
				</li>
				<li>
					<a href = "#">
						<img src = "http://placehold.it/600x400">
						<div class="slider-caption">
							<h3>Title</h3>
							<span>Subtitle</span>
						</div>
					</a>
				</li>
				<li>
					<a href = "#">
						<img src = "http://placehold.it/600x400">
						<div class="slider-caption">
							<h3>Title</h3>
							<span>Subtitle</span>
						</div>
					</a>
				</li>
				<li>
					<a href = "#">
						<img src = "http://placehold.it/600x400">
						<div class="slider-caption">
							<h3>Title</h3>
							<span>Subtitle</span>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="module-boxes">
			<h2><span>Ministries</span></h2>
			<ul class="box-list group">
				<li>
					<div class="box-wrap">
						<h3>Life Groups</h3>
						<p>This personage, who had taken the train at Elko, was tall and dark, with black moustache, black stockings, a black silk hat, a black waistcoat, black trousers, a white cravat, and dogskin gloves.  He might have been taken for a clergyman.  He went from one end of the train to the other, and affixed to the door of each car a notice written in manuscript.</p>
						<a href = "#">Learn more about Life Groups</a>
					</div>
				</li>
				<li>
					<div class="box-wrap">
						<h3>The Little Door</h3>
						<p>This personage, who had taken the train at Elko, was tall and dark, with black moustache, black stockings, a black silk hat, a black waistcoat, black trousers, a white cravat, and dogskin gloves.  He might have been taken for a clergyman.  He went from one end of the train to the other, and affixed to the door of each car a notice written in manuscript.</p>
						<a href = "#">Learn more about The Little Door</a>
					</div>
				</li>
				<li>
					<div class="box-wrap">
						<h3>Redemption Groups</h3>
						<p>This personage, who had taken the train at Elko, was tall and dark, with black moustache, black stockings, a black silk hat, a black waistcoat, black trousers, a white cravat, and dogskin gloves.  He might have been taken for a clergyman.  He went from one end of the train to the other, and affixed to the door of each car a notice written in manuscript.</p>
						<a href = "#">Learn more about Redemption Groups</a>
					</div>
				</li>
				<li>
					<div class="box-wrap">
						<h3>The Hinge</h3>
						<p>This personage, who had taken the train at Elko, was tall and dark, with black moustache, black stockings, a black silk hat, a black waistcoat, black trousers, a white cravat, and dogskin gloves.  He might have been taken for a clergyman.  He went from one end of the train to the other, and affixed to the door of each car a notice written in manuscript.</p>
						<a href = "#">Learn more about The Hinge</a>
					</div>
				</li>
			</ul>
		</div><!--boxes-->
		<div class="module-background-centered" style="background-image: url('http://placehold.it/1920x1080');">
			<div class="sm-wrap">
				<h2>Come Worship with Us</h2>
				<p class="times">Saturday Evenings 5p | Sunday Mornings 8:30A &amp; 10A</p>
				<p>111 Samuel Boulevard<br />Coppell, TX 75019</p>
				<p><a href = "#">info@thedoorchurch.net</a></p>
			</div>
		</div>
		<div class="module-background-centered dark-text">
			<div class="sm-wrap">
				<h2>We'd Love to Know You</h2>
				<p>Looking to get plugged in? Need a listening ear? We're here.</p>
				<p><a href = "#" class="clear-btn">Let's Get Connected</a></p>
			</div>
		</div>
		<?php
			$events = eo_get_events(array(
				'numberposts'=>6,
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
						$twoTimes = NULL;

                	/*Check if all day, set format accordingly
                	if( eo_is_all_day($event->ID) ){
                    	$format = get_option('date_format');
                	}else{
                    	$format = get_option('date_format').' '.get_option('time_format');
                	}*/
                	$return .= '<li><a title="'.$event->post_title.'" href="'.get_permalink($event->ID).'">'.get_the_post_thumbnail($event).'<div class="slider-caption"><h3>'.$event->post_title.'</h3><span>'.eo_format_date($event->StartDate.' '.$event->StartTime, $format).'</span></div></a></li>';
            	endforeach;

            	$return.='</ul>';
            	echo $return;
    		?>
		</div>
		<?php endif;?>
		<div class="module-text group">
			<div class="fifty text-content">
				<p>Secondly: The ship Union, also of Nantucket, was in the year 1807 totally lost off the Azores by a similar onset, but the authentic particulars of this catastrophe I have never chanced to encounter, though from the whale hunters I have now and then heard casual allusions to it.</p>

				<p>Thirdly: Some eighteen or twenty years ago Commodore J&mdash;-, then commanding an American sloop-of-war of the first class, happened to be dining with a party of whaling captains, on board a Nantucket ship in the harbor of Oahu, Sandwich Islands. Conversation turning upon whales, the Commodore was pleased to be sceptical touching the amazing strength ascribed to them by the professional gentlemen present. He peremptorily denied for example, that any whale could so smite his stout sloop-of-war as to cause her to leak so much as a thimbleful. Very good; but there is more coming. Some weeks after, the Commodore set sail in this impregnable craft for Valparaiso. But he was stopped on the way by a portly sperm whale, that begged a few moments' confidential business with him. That business consisted in fetching the Commodore's craft such a thwack, that with all his pumps going he made straight for the nearest port to heave down and repair. I am not superstitious, but I consider the Commodore's interview with that whale as providential. Was not Saul of Tarsus converted from unbelief by a similar fright? I tell you, the sperm whale will stand no nonsense.</p>

				<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern's famous Discovery Expedition in the beginning of the present century. Captain Langsdorff thus begins his seventeenth chapter:</p>

			</div>
			<div class="fifty">
				<img src = "http://placehold.it/1080x1620">
			</div>
		</div>
		<div class="module-text group">
			<div class="fifty">
				<img src = "http://placehold.it/1080x1620">
			</div>
			<div class="fifty text-content">
				<p>Secondly: The ship Union, also of Nantucket, was in the year 1807 totally lost off the Azores by a similar onset, but the authentic particulars of this catastrophe I have never chanced to encounter, though from the whale hunters I have now and then heard casual allusions to it.</p>

				<p>Thirdly: Some eighteen or twenty years ago Commodore J&mdash;-, then commanding an American sloop-of-war of the first class, happened to be dining with a party of whaling captains, on board a Nantucket ship in the harbor of Oahu, Sandwich Islands. Conversation turning upon whales, the Commodore was pleased to be sceptical touching the amazing strength ascribed to them by the professional gentlemen present. He peremptorily denied for example, that any whale could so smite his stout sloop-of-war as to cause her to leak so much as a thimbleful. Very good; but there is more coming. Some weeks after, the Commodore set sail in this impregnable craft for Valparaiso. But he was stopped on the way by a portly sperm whale, that begged a few moments' confidential business with him. That business consisted in fetching the Commodore's craft such a thwack, that with all his pumps going he made straight for the nearest port to heave down and repair. I am not superstitious, but I consider the Commodore's interview with that whale as providential. Was not Saul of Tarsus converted from unbelief by a similar fright? I tell you, the sperm whale will stand no nonsense.</p>

				<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern's famous Discovery Expedition in the beginning of the present century. Captain Langsdorff thus begins his seventeenth chapter:</p>
			</div>
		</div>
		<div class="module-three-list">
			<ul class="threes group">
				<li>
					<h3>Gospel Centered</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</li>
				<li>
					<h3>Community Driven</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</li>
				<li>
					<h3>Other People Focused</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</li>
			</ul>
		</div>
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
				<img src = "http://placehold.it/1920x1080">
				<a href = "#" class="video-trigger" data-video="181725879">Watch Billy's Story <svg class="icon icon-play-circle-o"><use xlink:href="#icon-play-circle-o"></use></svg></a>
			</div>
			<div class="video-container">
			</div>
		</div>
		<div class="module-generic module-fifty">
			<div class="wrap group">
				<div class="half first">
					<h3>Gospel Centered</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</div>
				<di class="half">
					<h3>Other People Focused</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</div>
			</div>
		</div>
		<div class="module-generic module-two-third">
			<div class="wrap group">
				<div class="two-third first">
					<h3>Gospel Centered</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</div>
				<di class="third">
					<h3>Other People Focused</h3>
					<p>I will now refer you to Langsdorff's Voyages for a little circumstance in point, peculiarly interesting to the writer hereof. Langsdorff, you must know by the way, was attached to the Russian Admiral Krusenstern</p>
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
