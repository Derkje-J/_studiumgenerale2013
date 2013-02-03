<?php
/**
 * The template for displaying events in the event lists on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package Studium Generale 2013
 * @subpackage Studium Generale 2013 1.0
 */
 
 if (!defined("SG_EVENTS_VERSION")) {
	echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
	return;	
}
 
$meta_data = get_post_custom(get_the_ID());

$location = get_event_location();
$meta_extra = get_event_extra();
 
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Event">
    <header class="entry-header">
        <div class="entry-thumbnail fivecol">
        <?php 
		if ( function_exists( 'get_dj_fallback_thumbnail' ) ) : 
			if ( $thumbnail = get_dj_fallback_thumbnail( NULL, 'event-li-thumb' ) ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="image" >
                   <?php echo $thumbnail; ; ?>
                </a>
		<?php 
			endif;
		elseif ( has_post_thumbnail() ) : 
		?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			   <?php echo the_post_thumbnail( 'event-li-thumb' ); ?>
            </a>
		<?php 
		endif;
		?>
        </div>
 
 		<div class="event-data sevencol last">
            <hgroup>
                <h2 class="entry-title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span itemprop="name"><?php the_title(); ?></span></a></h2><h3 class="speakers"><?php the_event_speakers(); ?></h3>
            </hgroup>

            <p class="event-meta meta">
            	<?php the_event_datetime_schema( NULL, true, true ); ?>
                <?php the_event_datetime(); ?>
                <?php if (isset($location)) : ?> @ 
                	<span class="location" itemprop="location" itemscope itemtype="http://schema.org/Place">
						<a itemprop="url" href="<?php echo esc_attr( esc_url( get_permalink( get_event_location_data() ) ) ); ?>">
						<?php echo $location; ?>
        				</a>
       				</span>
                <?php endif; ?>
            </p>      
            <div itemprop="description">        
            	<?php the_excerpt(); ?>
            </div>
        </div>  
    </header><!-- .entry-header -->
</article>
<?php 