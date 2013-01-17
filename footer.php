<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */
?>

	</div><!-- #main .site-main -->

	<nav id="partners" role="directory" class="row">
    	<ul>
        	<li>
            	<a href="http://delftdebatteert.tudelft.nl/" title="<?php _ex("Delft Debatteert", "partner link title", "sg2013"); ?>">
                	<img src="<?php echo esc_attr( esc_url( get_template_directory_uri() . '/images/partner-delftdebatteert.jpg' ) ); ?>" alt="<?php _ex("Delft Debatteert", "partner img alt", "sg2013"); ?>"/></a></li>
            <li>
            	<a href="http://voxdelft.com/ " title="<?php _ex("VOX Delft", "partner link title", "sg2013"); ?>">
                	<img src="<?php echo esc_attr( esc_url( get_template_directory_uri() . '/images/partner-vox.png' ) ); ?>" alt="<?php _ex("VOX Delft", "partner img alt", "sg2013"); ?>"/></a></li>
            <li>
            	<a href="http://www.tedxdelft.nl/tedxdelftsalon/" title="<?php _ex("TEDxDelftSalon", "partner link title", "sg2013"); ?>">
                	<img src="<?php echo esc_attr( esc_url( get_template_directory_uri() . '/images/partner-tedxdelftsalon.png' ) ); ?>" alt="<?php _ex("TEDxDelftSalon", "partner img alt", "sg2013"); ?>"/></a></li>
        </ul>
    </nav>

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'sg2013_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'sg2013' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sg2013' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sg2013' ), 'Studium Generale 2013', '<a href="http://derk-jan.com/" rel="designer">Derk-Jan Karrenbeld</a> & Marnix de Graaf' ); ?>
            <div class="built-info">
                <?php $query_count = get_num_queries();
                printf( 
                    _x( 'Page built with %s in %s seconds.', 'queries, seconds', 'sg2013'),
                    sprintf( _n( '%d query', '%d queries', $query_count, 'sg2013' ), $query_count ),
                    timer_stop( 0, 2 )
                ); ?>
            </div><!-- .built-info -->
        </div><!-- .site-info -->
        
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
</body>
</html>