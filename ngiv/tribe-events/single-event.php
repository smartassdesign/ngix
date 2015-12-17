<?php
/**
 * NGI OVERRIDE of the...
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 * 
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); }

$event_id = get_the_ID();

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">	

			<div class="tribe-events-single" itemscope itemtype="http://schema.org/EducationEvent">

				<header>
					<h4><?php echo strip_tags ( tribe_get_event_taxonomy( $event_id, 'before=&sep=, &after' ) ); ?></h4>
					<?php the_title( '<h1 class="large" itemprop="name">', '</h1>' ); ?>
				</header> 

				<!-- Notices -->
				<?php tribe_events_the_notices() ?>			
			
					<div class="row">			

						<div class="col-md-4 col-md-push-8 bottom-separated">
							<div class="boxed bg-white class-sales">	
								<p><?php echo tribe_get_start_date(null, false, 'l\, F j'); ?></p>
								<p><?php echo tribe_get_start_date(null, false, 'g:i a'); ?> - <?php echo tribe_get_end_date(null, false, 'g:i a'); ?></p>
								<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
							</div> <!-- /.boxed bg-white -->			

							<?php
			 				if(get_field('multiple_session_dates')) {
								echo '<div class="multiple-session-info leader hidden-xs hidden-sm"><h4>Class Schedule</h4><p>' . get_field('multiple_session_dates') . '</p></div>';
							} ?>
						</div> <!-- /.col-md-4 .col-md-offset-1 -->				
			

						<div class="col-md-7 col-md-pull-4">	
							<section id="class-details" class="trailer">

							<?php while ( have_posts() ) :  the_post(); ?>
								<!-- Event content -->			

								<div class="class-description vertically-ruled">
									<?php the_content(); ?>
								</div> <!-- /.class-description .sub-pod-mini -->
							<?php endwhile; ?>			

							<?php
			 
							if(get_field('class_dishes')) {
								echo '<div class="class-dishes vertically-ruled"><h4>Dishes We\'ll Cover</h4>' . get_field('class_dishes') . '</div>';
							} ?>			

							<?php if (have_posts()) : ?>							

							<?php
							$post_id = tribe_get_organizer_id();
							$queried_post = get_post($post_id);
							?>
			      		
			      				<div class="vertically-ruled" itemprop="performer" itemscope itemtype="http://schema.org/Person">
									<h4>About the Instructor</h4>
											<p itemprop="description"><?php echo $queried_post->post_content; wp_reset_query(); ?></p>
								</div> <!-- /.sub-pod-mini -->
					
							<?php endif; ?>			
			

							<?php
			 				if(get_field('multiple_session_dates')) {
								echo '<div class="multiple-session-info visible-xs-block visible-sm-block"><h4>Class Schedule</h4><p>' . get_field('multiple_session_dates') . '</p></div>';
							} ?>

							</section> <!-- /#class-details -->

							<?php
			 				if(get_field('additional_info')) {
								echo '<div class="well"><h4>NGI FYI</h4><p>' . get_field('additional_info') . '</p></div>';
							} ?>			

							<p class="tribe-events-back"><a href="<?php echo tribe_get_events_link() ?>" class="btn-text"> <?php _e( '<span class="icon-arrow-left"></span> All Classes', 'tribe-events-calendar' ) ?></a></p>			

						</div> <!-- /.col-md-7 .col-md-pull-4 -->			

					</div> <!-- /.row -->				

			</div> <!-- /.tribe-events-single -->

		</div> <!-- /.col-md-12 -->
	</div>	<!-- /.row -->
</div>	<!-- /.container -->
