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
            		<li class="recording">
                    	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </li>
                    <li class="recording">
                    	<a href="#" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Some other event</a>
                    </li>
                    <li class="recording">
                    	<a href="#" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Some event</a>
                    </li>
            	</ul>
            </aside>
		</div><!-- #secondary .widget-area -->
