<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

get_header(); ?>

        <div itemscope itemtype="http://schema.org/Place">
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
    
                <?php while ( have_posts() ) : the_post(); ?>
                            
                    <div class="ninecol">
                        <?php sg2013_content_nav( 'nav-above' ); ?>
        
                        <?php get_template_part( 'content', 'location' ); ?>
                    </div>
                    
                    <section class="threecol last">
                        <?php get_template_part( 'content', 'location-bar'); ?>
                    </section>
                    
                    <div class="ninecol">
                        <?php sg2013_content_nav( 'nav-below' ); ?>
            
                        <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                comments_template( '', true );
                        ?>
                    </div>
    
                <?php endwhile; // end of the loop. ?>
    
                </div><!-- #content .site-content -->
            </div><!-- #primary .content-area -->
            
            <?php get_bottombar( 'location' ); ?>
        </div>

<?php get_footer(); ?>