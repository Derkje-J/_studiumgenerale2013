<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package Studium Generale 2013
 * @since Studium Generale 2013 1.0
 */

/*
 * The event widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-8' ) && ! is_active_sidebar( 'sidebar-9' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="tertiary" class="widget-area row" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
	<div class="first front-widgets sixcol">
		<?php dynamic_sidebar( 'sidebar-8' ); ?>
	</div><!-- .first -->
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'sidebar-9' ) ) : ?>
	<div class="second front-widgets sixcol last">
		<?php dynamic_sidebar( 'sidebar-9' ); ?>
	</div><!-- .second -->
	<?php endif; ?>   

</div><!-- #secondary -->