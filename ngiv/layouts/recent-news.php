<section id="recent-news" class="pod">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h4>Recently Written</h4>
			</div> <!-- /.col-md-12 -->

			<?php
				$the_query = new WP_Query(array('posts_per_page' => -3));
				while ( $the_query->have_posts() ) :
				$the_query->the_post();
			?>		
			
			<div class="col-md-4 news-block m-b-2"> 						
				
				<div class="zoom-img">
					
						<a href="<?php echo the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?></a>
					
				</div> <!-- /.zoom-img -->
				<div class="boxed bg-white">
					<a href="<?php echo the_permalink(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>		
				</div> <!-- /.boxed .bg-white -->		
			</div> <!-- /.com-sm-4 -->						
			
			<?php endwhile ?>				

			<?php wp_reset_query(); ?>

		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section> <!-- /#recent-news .pod -->