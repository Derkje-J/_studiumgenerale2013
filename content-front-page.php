<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content clear">
	    <h1 id="dynamic-page-header" class="page-header event-header">
        	<?php _e('Upcoming events', 'sg-event'); ?>
        </h1>
    	<?php 
		if (!defined("SG_EVENTS_VERSION"))
			echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
		else if (!class_exists("SG_EventShortcodes"))
			echo "<p>".__("class SG_EventShortcodes is not defined. Please enable the events plugin.", "sg")."</p>";
		else {
			$shortcodes = new SG_EventShortcodes();
			echo $shortcodes->event_full(
				array(
					"limit" => "4", // change to display more or less
					"fullview" => true,
				)
			); 
		}
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
