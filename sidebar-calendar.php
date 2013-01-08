<?php
/**
 * The Sidebar with the calendar for the front page
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
?>
		<div id="secondary" class="fourcol last" role="complementary">
            <aside id="calendar" class="widget widget_calendar calendar">
            <?php if (!defined("SG_EVENTS_VERSION"))
                echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
           	?>
            </aside>
            
            <aside id="recordings" class="widget widget_recordings">
            	<h3 class="widget-title"><?php _e("Recordings of recent events", "sg2013"); ?></h3>
	            <ul class="recordings">
            	<?php
					$args = array(
						'post_type' => 'sg_event',
						'post_status' => 'publish',

						'meta_key' => 'sg_event_startdate',
						'orderby' => 'meta_value_num',
						'order' => 'DESC',
						
						'nopaging' => true,
						'posts_per_page' => -1,
						
						/*'meta_query' => array(
							array(
								'key' => 'sg_recording_url',
								'value' => '0',
								'compare' => '>',
								'type' => 'NUMERIC'
							)
						)*/
					);
					
					$max = 5; // change for more/less
					$count = 0;
					$events = new WP_Query($args);
					
					while ( $events->have_posts() ) :
						$events->the_post();
						$custom = get_post_meta(get_the_ID(), 'sg_recording_url');
						
						if (!isset($custom) || !isset($custom[0]) || !strlen($custom[0]))
							continue;
							
						$count++;
							
						echo '<li class="recording">
							<a href="' .get_permalink(get_the_ID()).'#recording-'.get_the_ID().'" title="'.__("See this recording.", "sg-event").'">'.get_the_title() . '</a>
						</li>';
						
						if ($max <= $count)
							break;
					endwhile;
					
					if (!$count)
						echo '<li class="no-recording">'.__("No recordings found.", "sg-event").'</li>';
					
					// Restore original Query & Post Data
					wp_reset_query();
					wp_reset_postdata();
				?>
            	</ul>
            </aside>
		</div><!-- #secondary .widget-area -->
