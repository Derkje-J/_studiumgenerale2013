<?php
/**
 * The template for displaying events on the event page
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
$meta_extra = isset( $meta_data["sg_event_extra"] ) ? unserialize($meta_data["sg_event_extra"][0]) : array();
$show_header = isset( $meta_data["sg_event_header"] ) && !( empty( $meta_data["sg_event_header"][0] ) );
 
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="ninecol last">
    <header class="entry-header">
        <div class="event-data">
            <hgroup>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <h3 class="speakers"><?php the_event_speakers(); ?></h3>
            </hgroup>     
        </div>  
        <div class="entry-thumbnail">
        <?php 
		if ( $show_header ) :
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
		endif;
		?>
       
        </div>
    </header><!-- .entry-header -->
    <div class="entry-content">
		<?php the_content(); ?>
        
        <?php the_event_recording(); ?>
	</div><!-- .entry-content -->
    <footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_term_list( get_the_ID(),'sg_eventcategory', '', __(', ', 'sg2013'), '' );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'sg2013' ) );

			if ( ! sg2013_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'sg2013' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article>