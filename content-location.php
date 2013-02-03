<?php
/**
 * The template used for displaying location content for single-sg_location
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
 
if (!defined("SG_EVENTS_VERSION")) {
	echo "<p>".__("SG_EVENTS_VERSION is not defined. Please enable the events plugin.", "sg")."</p>";
	return;	
}

$meta_data = get_post_custom(get_the_ID());
 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="ninecol last">
    <header class="entry-header">
        <div class="event-data">
            <hgroup>
                <h1 class="entry-title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sg2013' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><span itemprop="name"><?php the_title(); ?></span></a></h1>
            </hgroup>     
        </div>  
        <div class="entry-thumbnail">
        <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
               <?php the_post_thumbnail(array(850, 1000)); ?>
            </a>
       	<?php endif; ?>
        </div>
        <abbr class="updated" title="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" style="display:none"/>
    </header><!-- .entry-header -->
    <div class="entry-content" itemprop="description">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
    <footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'sg2013' ) ) . get_the_term_list( get_the_ID(),'sg_eventcategory', '', __(', ', 'sg2013'), '' );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'sg2013' ) );

			if ( false && ! sg2013_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s%5$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>%5$s.', 'sg2013' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s%5$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s%5$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'sg2013' );
				}

			} // end check for categories on this blog
			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' ),
				sprintf( 
					'<span class="byline"> ' . _x('by', 'post author', 'sg2013').' <span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span></span>', 
					esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
					esc_attr( sprintf( __( 'View all posts by %s', 'sg2013' ), get_the_author() ) ),
					esc_html( get_the_author() )
				)
			);
			
		?>

		<?php edit_post_link( __( 'Edit', 'sg2013' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article>