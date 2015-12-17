<?php get_header(); the_post(); ?>

<div class="page-wrap">
	 <div class="container">


<div class="row m-t-3">
	<div class="col-sm-6">	

			<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?>

		</div>		

		 <div class="col-sm-6">	




			<h1 class="large" itemprop="headline">
				<?php the_title(); ?>
			</h1>

			<?php the_content(); ?>				



	</div> <!-- /.col-md-6 -->


</div>	<!-- /.row -->

</div> <!-- /.container -->
</div> <!-- /.page-wrap -->

<?php get_footer(); ?>