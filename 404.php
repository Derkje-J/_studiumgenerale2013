<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area twelvecol">
		<div id="content" class="site-content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'sg2013' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sg2013' ); ?></p>

					<?php get_search_form(); ?>
                    <br>
                    
                    <!--
                    <aside class="row">
                        <div class="fourcol widget-wrapper">
                            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                        </div>
    
                        <div class="widget fourcol">
                            <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'sg2013' ); ?></h2>
                            <ul>
                            <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 0, 'hierarchical' => 0, 'title_li' => '', 'number' => 10 ) ); ?>
                            </ul>
                        </div><!-- .widget -->
    <!--
                        <div class="fourcol widget-wrapper last">
                        <?php
                        	/* translators: %1$s: smilie */
                       	 $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'sg2013' ), convert_smilies( ':)' ) ) . '</p>';
                        	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
                        ?>
                        </div>
    
                        <div class="fourcol widget-wrapper">
                        <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                        </div>
                    </aside>-->

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_sidebar('404'); ?>
<?php get_footer(); ?>