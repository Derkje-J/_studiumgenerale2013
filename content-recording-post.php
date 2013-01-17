<?php
/**
 * The template for displaying event recordings on the recordings page
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
 
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="ninecol last">
    <header class="entry-header">
        <div class="event-data">
            <hgroup>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <h3 class="speakers"><?php the_event_speakers(); ?></h3>
            </hgroup>     
        </div>  
    </header><!-- .entry-header -->
    <div class="entry-content">        
        <?php the_event_recording(); ?>
	</div><!-- .entry-content -->
</article>