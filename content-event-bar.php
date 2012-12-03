<?php

$speakers = get_event_speakers_data();
$location = get_event_location_data();
$extra = get_event_extra();
$maps = get_event_location_map_url();

?>

<!--<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>-->
<h2>Details</h2>
<h3 class="event-time"><?php the_event_datetime(NULL, true); ?></h3>

<div class="event-location" style="margin-top:1rem">
    <h3 class="location-title"><?php the_event_location(); ?></h3>
    
	<?php if (isset($location)) : ?>
    <p class="location-map">
        <?php the_event_location_details(); ?><br>
        <img src="<?php echo $maps; ?>" style="background: url('http://placehold.it/800x450.png&text=map'"/>
    </p>
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
        <h3 class="speaker-title"><?php echo $speaker["name"]; ?></h3>
        <p class="speaker-bio">
            <?php echo isset($speaker["bio"]) && strlen(strval($speaker["bio"])) ? $speaker["bio"] : __("No speaker information", "sg2013"); ?>
        </p>
    <?php endforeach; ?>
</div>
<?php endif; ?>