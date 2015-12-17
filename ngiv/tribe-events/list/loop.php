<?php 
/**
 * NGI OVERRIDE of the...
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php 
global $more;
$more = false;
?>


<div class="tribe-events-loop vcalendar">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'tribe_events_inside_before_loop' ); ?>
		<?php $event_id = get_the_ID(); ?>
		<!-- Month / Year Headers -->
		<?php tribe_events_list_the_date_headers(); ?>

			<div id="post-<?php the_ID() ?>" class="<?php tribe_events_event_classes() ?> row catalog-item">
				<a class="url" href="<?php echo tribe_get_event_link() ?>" rel="bookmark">
					<div class="col-sm-7 col-sm-push-4 class-title">
						<h2 class="item-title"><?php the_title() ?></h2>
						<p class="item-description"><?php echo get_the_excerpt() ?></p>
						<p class="instructor"><?php echo tribe_get_organizer(); ?></p>
					</div> <!-- /.col-sm-7 .col-sm-push-4 .class-title -->	

					<div class="col-sm-3 col-sm-pull-7 item-details">
						<p class="item-date"><?php echo tribe_get_start_date(null, false, 'l\, F j'); ?></p>
						<p class="item-time"><?php echo tribe_get_start_date(null, false, 'g:ia'); ?> &mdash; <?php echo tribe_get_end_date(null, false, 'g:ia'); ?></p>
						<p class="item-category"><?php echo strip_tags ( tribe_get_event_taxonomy( $event_id, 'before=&sep=, &after' ) ); ?></p>

<?php if ( get_field('intensive') == true ) { ?>

			<p class="item-badge badge">Intensive</p>

			<?php } else { ?>

<?php } ?>

					</div> <!-- /.col-sm-3 col-sm-pull-7 .item-details -->
				</a>
			</div><!-- #post-XXX -->	


		<?php do_action( 'tribe_events_inside_after_loop' ); ?>
	<?php endwhile; ?>

</div><!-- /.tribe-events-loop .vcalendar -->		