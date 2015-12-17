<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>



	<article class="news-preview m-b-3">
		<a href="<?php echo the_permalink(); ?>">
			<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?>
		</a>				

		<div class="boxed bg-white">
			<a href="<?php echo the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<?php the_excerpt(); ?>
			<a href="<?php echo the_permalink(); ?>" class="btn btn-sm btn-alpha">Read More</a>
		</div> <!-- /.boxed -->	
	</article>		


