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

	<footer id="colophon" class="site-footer row" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'sg2013_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'sg2013' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sg2013' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'sg2013' ), 'sg2013', '<a href="http://derk-jan.com/" rel="designer">Derk-Jan Karrenbeld & Marnix de Graaf</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
</body>
</html>