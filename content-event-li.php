<?php
/**
 * The template for displaying events in the event lists on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Studium_Generale_2012
 */
 
 if (!defined("SG_EVENTS_VERSION")) {
	echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
	return;	
}
 
$meta_data = get_post_custom(get_the_ID());

$location = get_event_location();
$meta_extra = get_event_extra();
 
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-thumbnail fivecol">
        <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
               <?php the_post_thumbnail(array(380, 180)); ?>
            </a>
       	<?php endif; ?>
        </div>
 
 		<div class="event-data sevencol last">
            <hgroup>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2><h3 class="speakers"><?php the_event_speakers(); ?></h3>
            </hgroup>

            <p class="event-meta meta">
                <?php the_event_datetime(); ?>
                <?php if (isset($location)) : ?> @ 
                	<span class="location"><?php echo $location; ?></span>
                <?php endif; ?>
            </p>              
            <?php the_excerpt(); ?>
            
            <?php /*<div class="event-meta">
                <?php foreach($meta_speakers as $meta_speaker) : ?>
                <h2><?php $meta_speaker["name"];?></h2>
                <p><?php $meta_speaker["bio"];?></p>
                <?php endforeach; ?>
            </div>
            */ ?>
        </div>  
    </header><!-- .entry-header -->
</article>
<?php 