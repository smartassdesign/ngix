<!-- Template file for displaying latests posts -->
<?php get_header(); ?>


<div class="container p-y-3">

	<div class="row m-b-md">
 
			<div class="col-md-8 col-sm-12">	


				<?php
				$places_args = array(
					'posts_per_page'	=> 6,
						'post_type'			=> 'post',
						'orderby'         => 'date',
						'order'           => 'DESC',
						'paged'           => ( get_query_var('paged') ? get_query_var('paged') : 1 )
					);
				$places_query = new WP_Query( $places_args );
				if( $places_query->have_posts() ):			
					while( $places_query->have_posts() ) : $places_query->the_post(); 
			 get_template_part( 'content', get_post_format() );
					endwhile;
				?>

	</div> <!-- /.col-sm-8 -->
	
			<div class="col-md-4 hidden-sm-down blog-sidebar">	
				<?php get_sidebar( 'dyno' ); ?>
			</div> <!-- /.col-sm-4 .blog-sidebar -->	

	</div> <!-- /.row -->


				<?php
				//hack fix for pagination see: http://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops/120408#120408
				$temp_query = $wp_query;
				$wp_query   = NULL;
				$wp_query   = $places_query;
				
				if ( function_exists('wp_bootstrap_pagination') )	
					wp_bootstrap_pagination();
			//reset main query
				$wp_query = NULL;
				$wp_query = $temp_query;
			endif;
			wp_reset_query();
			?>		

	</div> <!-- /.container -->







<?php get_footer(); ?>
