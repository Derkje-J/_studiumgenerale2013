<?php
/*
Template Name: collegerama
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
				
				<?php //while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'content', 'page' ); ?>
			
					<?php 
					$test = new SG_Recordings();
					$feeds = $test->get_feed_urls();

					?><h2>Results</h2><?php
					$results = $test->get_feed_recordings($feeds); ?>
                    
					<ul>
					<?php foreach($results as $cat => $recordings) : ?>
						<li><?php echo $cat; ?>
                        	<ul>
                            	<?php foreach($recordings as $recording) : ?>
                                <li><a href="<?php echo $recording["url"]; ?>"><?php echo $recording['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php 
					endforeach; 
					?>
                    </ul>
                    
                    <?php display_recordings_archive(); ?>
                    
					<?php comments_template( '', true ); ?>
					

				<?php // endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>