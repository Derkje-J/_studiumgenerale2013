<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you’d like -- followed by front-page-only widgets in one or two columns.
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area eightcol">
		<div id="content" class="site-content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'front-page' ); ?>
            <?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'calendar' ); ?>

    <!-- <hr class="row"> -->

	<?php get_bottombar( 'front' ); ?>
    
<?php get_footer(); ?>