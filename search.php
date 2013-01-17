<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

get_header(); ?>

		<section id="primary" class="content-area eightcol">
			<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'sg2013' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php sg2013_content_nav( 'nav-above' ); ?>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php $part = 'search';//get_post_type();  ?>
					<?php get_template_part( 'content', $part ); ?>

				<?php endwhile; ?>

				<?php sg2013_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

			</div><!-- #content .site-content -->
		</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_bottombar( '404' ); ?>
<?php get_footer(); ?>