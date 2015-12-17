<?php 
/**
 * NGI OVERRIDE of the... (really, just for link consistency but... we'll see)
 * List View Nav Template
 * This file loads the list view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/nav.php 
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */
global $wp_query;

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<h3 class="tribe-events-visuallyhidden"><?php _e( 'Events List Navigation', 'tribe-events-calendar' ) ?></h3>

<div class="row">
	

	<?php if( tribe_is_past() ) : ?>
		<div class="col-xs-6">
		<?php if( get_next_posts_link() ) : ?>
			<a href="<?php echo tribe_get_past_link() ?>" rel="prev" class="btn-text"><?php _e( '<span class="icon-arrow-left"></span> Previous <span class="hide-below-480">Classes</span>', 'tribe-events-calendar' ) ?></a>
		<?php endif; ?>
		</div>


	<?php elseif ( tribe_is_upcoming() ) : ?>
		<?php if( get_previous_posts_link() ) : ?>
			<div class="col-xs-6">
			<a href="<?php echo tribe_get_upcoming_link() ?>" rel="prev" class="btn-text"><?php _e( '<span class="icon-arrow-left"></span> Previous <span class="hide-below-480">Classes</span>', 'tribe-events-calendar' ) ?></a>
		<?php elseif ( tribe_has_past_events() ) : ?>
			<div class="col-xs-6">
			<a href="<?php echo tribe_get_past_link() ?>" rel="prev" class="btn-text"><?php _e( '<span class="icon-arrow-left"></span> Previous <span class="hide-below-480">Classes</span>', 'tribe-events-calendar' ) ?></a>
		<?php endif; ?>
		</div>
	<?php endif; ?>

	
	<?php if( tribe_is_past() ) : ?>
		<?php if( get_query_var( 'paged' ) > 1 ) : ?>
			<div class="col-xs-6 text-right">
				<a href="<?php echo tribe_get_past_link() ?>" rel="next" class="btn-text"><?php _e( 'Next <span class="hide-below-480">Classes</span> <span class="icon-arrow-right"></span>', 'tribe-events-calendar' ) ?></a>
		<?php elseif( !get_previous_posts_link() ) : ?>
			<div class="col-xs-6 text-right">
				<a href="<?php echo tribe_get_upcoming_link() ?>" rel="next" class="btn-text"><?php _e( 'Next <span class="hide-below-480">Classes</span> <span class="icon-arrow-right"></span>', 'tribe-events-calendar' ) ?></a>
		<?php endif; ?>
		</div>

	<?php elseif ( tribe_is_upcoming() ) : ?>
		<div class="col-xs-6 text-right">
		<?php if( get_next_posts_link() ) : ?> 
			<a href="<?php echo tribe_get_upcoming_link() ?>" rel="next" class="btn-text"><?php _e( 'Next <span class="hide-below-480">Classes</span> <span class="icon-arrow-right"></span>', 'tribe-events-calendar' ) ?></a>
		<?php endif; ?>

		</div>
	<?php endif; ?>
</div>