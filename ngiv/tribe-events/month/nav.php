<?php 
/**
* NGI OVERRIDE of the... (well if we did it for the list view...) 
 * Month View Nav Template
 * This file loads the month view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/nav.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_nav' ) ?>

<h3 class="tribe-events-visuallyhidden"><?php _e( 'Calendar Month Navigation', 'tribe-events-calendar' ) ?></h3>


<!-- <div class="container"> -->
<div class="row">
	<div class="col-xs-6">
		<?php tribe_events_the_previous_month_link(); ?>
	</div> <!-- /.col-xs-6 -->
	<div class="col-xs-6 text-right">
		<?php tribe_events_the_next_month_link(); ?>
	</div> <!-- /.col-xs-6 /text-right -->
</div> <!-- /.row -->
<!-- </div> --> <!-- /.container -->

<?php do_action( 'tribe_events_after_nav' ) ?>
