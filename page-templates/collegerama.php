<?php
/*
Template Name: Collegerama
*/

/**
 * The template for displaying the archive page: 'Opnames'.
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
 
 

get_header(); ?>

		<div id="primary" class="content-area eightcol">
			<div id="content" class="site-content" role="main">
				
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'content', 'page' ); ?>
			
				<?php endwhile; // end of the loop. ?>
                
                <?php 
				
				$query = new WP_Query(
					array(
						'post_type' => 'sg_event',
						'meta_key' => '_sg_recording_url',
						'meta_query' => array(
							//'relation' => 'AND',
							array(
								'key' => '_sg_recording_url',
								'compare' => '!=',
								'value' => ''
							),
							
						),
						'paged' => get_query_var( 'paged' ),
						'posts_per_page' => '2',
					)
				);
				
				while ( $query->have_posts() ) : $query->the_post(); 
				
					get_template_part( 'content', 'recording-post' );
					
				endwhile;
				
				?>
                
                <?php sg2013_content_nav( 'nav-below' ); ?>
                
                <?php wp_reset_postdata(); ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar( 'collegerama' ); ?>
<?php get_footer(); ?>