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
    	<?php 
		echo sg_event_full(
			array(
				"limit" => "4",
				"fullview" => true,
			)
		); 
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
