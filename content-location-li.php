<?php
/**
 * The template for displaying locations in the location lists on archive pages
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-thumbnail fivecol">
        <?php 
		if ( function_exists( 'get_dj_fallback_thumbnail' ) ) : 
			if ( $thumbnail = get_dj_fallback_thumbnail( NULL, array(850, 1000) ) ) :
			?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				   <?php echo $thumbnail; ; ?>
				</a>
		<?php 
			endif;
		elseif ( has_post_thumbnail() ) : 
		?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			   <?php echo the_post_thumbnail( array(850, 1000) ); ?>
			</a>
		<?php 
		endif; 
		?>
        </div>
 
 		<div class="location-data sevencol last">
            <hgroup>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </hgroup>
                        
            <?php the_excerpt(); ?>
        </div>  
    </header><!-- .entry-header -->
</article>
<?php 