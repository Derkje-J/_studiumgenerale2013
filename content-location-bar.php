<?php
/**
 * The template used for displaying content in the sidebar on location pages
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
 
if (!defined("SG_EVENTS_VERSION")) {
	echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
	return;	
}

$location_data = get_location_details_data();
if (isset($location_data["url"]) && strlen(strval($location_data["url"])))
	$location_url = '<a href="'.$location_data["url"].'" title="'.__("Visit location website", "sg2013").'">'.__("Website", "sg2013").'</a>';

/*
$location_data = get_location_details_data();
if ( isset( $location_data ) ) {
	$location_details = $location_data["street"] . ' ' . $location_data["number"] . '<br/>'.
	'<em>' . $location_data["postal"] . ' ' . $location_data["city"] . '</em><br>'.
	'<a href="'.get_location_map_url().'"><img src="'.get_location_map_url().'" style="background: url(\'http://placehold.it/800x450.png&text=map\'"/></a>'; 
	if (isset($location_data["url"]) && strlen(strval($location_data["url"]))) {
		$location_url = '<a href="'.$location_data["url"].'" title="'.__("Visit location website", "sg2013").'">'.__("Website", "sg2013").'</a>';
	}
} else {
	$location_details =  _x('No details', 'sg2013' , 'location');	
}*/	
?>

<h2>Details</h2>
<?php if (isset($location_url)) : ?>
<h3 class="location-url"><?php echo $location_url; ?></h3>
<?php endif; ?>

<div class="location-map"><?php
    if ( isset( $location_data ) ) {
    ?>
        <div class="event-location" style="margin-top:1rem">
            <div class="location-map">
                <?php the_location_details(); ?><br> 
                <a itemprop="map" href="<?php echo get_location_map_url(); ?>"><img src="<?php echo get_location_map_url(); ?>" style="background: url('http://placehold.it/800x450.png&text=map'"/></a>
            </div>
        </div>
    <?php
    }
	?><br>
</div>