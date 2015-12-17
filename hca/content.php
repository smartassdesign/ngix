<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<!-- <div class="card-wrapper"> -->
<?php $collections = get_field('collections',$post->ID); ?>


<div class="sd-card-wrapper">
	<article class="sd-card sd-article-card">
	<a href="<?php echo get_permalink($related->ID);?>">
		<?php
			$thumbnail = get_stylesheet_directory_uri().'/assets/img/rainbowparade.jpg'; //default
			if ($post_image_id = get_post_thumbnail_id($post->ID)) {
				$featured = wp_get_attachment_image_src( $post_image_id, 'thumbnail', false);
				if ($featured) 
					$thumbnail = $featured[0];
			} 
			?>
		
			<div class="sd-thumb-container">
				<div class="sd-thumb">
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'sd-card-image' ) ); ?>
				</div> <!-- /.sd-thumb -->
			</div> <!-- /.sd-thumb-container -->

		<div class="sd-card-block">
			<div class="sd-card-title">
				<h4 class="sd-card-title-text"><?php the_title_limit( 70, '&hellip;'); ?></h4>
			</div> <!-- /.sd-card-title -->
			<div class="sd-card-support-text">
				<?php the_excerpt();?>
			</div> <!-- /.sd-card-support-text -->

			<div class="sd-action-bar">
				<div class="sd-read-more">
					Read More
				</div> <!-- /.sd-read-more -->
			</div> <!-- /.sd-action-bar -->
		</div> <!-- /.sd-card-block -->

		</a>
	</article> <!-- /.sd-card -->

</div> <!-- ./card-wrapper -->

<?php /*
<div class="card-wrapper">
<div class="col-sm-6 article-card">
			<?php $post_id = get_the_ID(); ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-fluid  img-featured' ) ); ?></a>

				<article id="post-<?php the_ID(); ?>" class="cat-card" itemscope itemtype="http://schema.org/blogPosting">
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<div class="read-more">
						<p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a></p>
					</div> <!-- /.read-more -->
				</article>
</div>	<!-- /.col-sm-6 -->	
</div> <!-- ./card-wrapper -->

*/ ?>




