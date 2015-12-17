<section id="event-list">
<div id="secondary">
	<h5>Upcoming Classes</h5>
	<ul class="list-unstyled">

	<?php
	global $post;
	$all_events = tribe_get_events(array(
	'start_date'=>'upcoming',
	'posts_per_page'=>5
	));	

	foreach($all_events as $post) {
	setup_postdata($post);
	?>

	<li><a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4>
	<p class="item-date"><?php echo tribe_get_start_date($post->ID, false, 'l\, F j'); ?></p>
	<p class="item-time"><?php echo tribe_get_start_date($post->ID, false, 'g:i a'); ?> &mdash; <?php echo tribe_get_end_date($post->ID, false, 'g:i a'); ?></p></a></li>

	<?php } //endforeach ?>
	
	<?php wp_reset_query(); ?>

	</ul> <!-- /ul -->

	<a href="<?php echo tribe_get_events_link() ?>" class="btn-text"> <?php _e( ' View All Classes <span class="icon-arrow-right"></span>', 'tribe-events-calendar' ) ?></a>
	
	<?php if ( is_active_sidebar( 'dyno' ) ) : ?>
	
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'dyno' ); ?>
	</div><!-- #primary-sidebar -->

	<?php endif; ?>
</div><!-- /#secondary -->
</section> <!-- /#event-list -->