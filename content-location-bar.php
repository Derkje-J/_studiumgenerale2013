<?php

$location_data = get_location_details_data();
if (isset($location_data)) {
	$location_details = $location_data["street"] . ' ' . $location_data["number"] . '<br/>'.
	'<em>' . $location_data["postal"] . ' ' . $location_data["city"] . '</em><br>'.
	'<img src="'.get_location_map_url().'" style="background: url(\'http://placehold.it/800x450.png&text=map\'"/>'; 
	if (isset($location_data["url"]) && strlen(strval($location_data["url"]))) {
		$location_url = '<a href="'.$location_data["url"].'" title="'.__("Visit location website", "sg2013").'">'.__("Website", "sg2013").'</a>';
	}
} else {
	$location_details =  __('No details', 'sg2013');	
}	
?>

<h2>Details</h2>
<?php if (isset($location_url)) : ?>
<h3 class="location-url"><?php echo $location_url; ?></h3>
<?php endif; ?>

<p class="location-map">
    <?php echo $location_details; ?><br>
</p>
