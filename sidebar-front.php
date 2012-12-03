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
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) && ! is_active_sidebar( 'sidebar-4' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="tertiary" class="widget-area row" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="first front-widgets fourcol">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .first -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="second front-widgets fourcol">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .second -->
	<?php endif; ?>
    
    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div class="third front-widgets fourcol last">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .second -->
	<?php endif; ?>
</div><!-- #secondary -->