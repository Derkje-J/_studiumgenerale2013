<?php
/**
 * The template used for displaying event content in the sidebar on event pages
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
 
if (!defined("SG_EVENTS_VERSION")) {
	echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
	return;	
}

$speakers = get_event_speakers_data();
$location = get_event_location_data();
$extra = get_event_extra();
$maps = get_event_location_map_url();

?>

<!--<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>-->
<h2><?php _e("Social", "sg-event");?></h2>
<div style="margin-bottom: 1.5rem;" class="event-social">
	<?php if (!is_user_logged_in()) : ?>
		<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="<?php _e("Login", "sg-event"); ?>"><?php _e("Login to apply.", "sg-event"); ?></a>
	<?php else : 
		the_user_event_state();
	endif; ?>
    
	<?php the_event_facebook_link('', '<br>'); ?>
</div>

<h2><?php _e("Details", "sg-event");?></h2>
<h3 class="event-time"><?php the_event_datetime_schema( NULL, false, true ); the_event_datetime(NULL, true); ?></h3>

<div class="event-location" style="margin-top:1rem" itemprop="location" itemscope itemtype="http://schema.org/Place">
    <h3 class="location-title" itemprop="name"><?php the_event_location(); ?></h3>
    
	<?php if (isset($location)) : ?>
    
    <div class="location-map">
        <?php the_event_location_details(); ?><br> 
        <a itemprop="map" href="<?php echo $maps; ?>"><img src="<?php echo $maps; ?>" style="background: url('http://placehold.it/800x450.png&text=map'"/></a>
    </div>
    <?php endif; ?>
</div>


<?php if (isset($extra) && count($extra)) : ?>
<div class="event-extra">
	<?php foreach ($extra as $extra_item) : ?>
        <h3 class="extra-key"><?php echo $extra_item["key"]; ?></h3>
        <p class="extra-value">
            <?php echo $extra_item["value"]; ?>
        </p>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<?php if (isset($speakers) && count($speakers)) : ?>
<div class="event-speakers">
	<?php foreach ($speakers as $speaker) : ?>
    	<div itemscope itemtype="http://schema.org/Person" itemprop="performer" class="vcard">
        	<h3 class="speaker-title fn" itemprop="name"><?php echo $speaker["name"]; ?></h3>
            <p class="speaker-bio" itemprop="description" class="note">
                <?php echo isset($speaker["bio"]) && strlen(strval($speaker["bio"])) ? $speaker["bio"] : __("No speaker information", "sg2013"); ?>
            </p>
            <abbr class="role" title="speaker" style="display:none"/>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>