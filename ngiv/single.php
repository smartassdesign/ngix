<?php get_header(); the_post(); ?>

<div class="page-wrap">
	 <div class="container">

<div class="row">
	<div class="col-md-12 blog-header trailer">
			<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-full img-fluid' ) ); ?>
		</div>  <!-- /.col-md-12 -->
</div>  <!-- /.row -->


<div class="row">
	<div class="col-sm-8">	

		 <article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/blogPosting">

			<h1 class="large" itemprop="headline">
				<?php the_title(); ?>
			</h1>

			<?php
			if(get_field('post_subhead')) {
			  echo '<h3>' . get_field('post_subhead') . '</h3>';
			}
			?>

			<p class="blog-date"><?php the_date('F j, Y', 'Posted ', ''); ?>

			<?php
			if(get_field('post_author')) {
				echo '<span class="byline" itemprop="author creator" itemscope itemtype="http://schema.org/Person"><span itemprop="name">' . get_field('post_author') . '</span></span>';
			}
			?>		

			</p>	

			<?php the_content(); ?>

			<?php
			if(get_field('recipe_yield')) {
			  echo '<h4>Yield</h4> <p>' . get_field('recipe_yield') . '</p>';
			}
			?>	

			<?php 			

			$rows = get_field('recipe_ingredients_simple');
			if($rows)
			{
				echo '<h3>Ingredients</h3><ul>';			

				foreach($rows as $row)
				{
					echo '<li>' . $row['ingredient'] . '</li>';
				}			

				echo '</ul>';
			}			

			?>				
			

			<?php 			

			$rows = get_field('recipe_directions');
			if($rows)
			{
				echo '<h3>Directions</h3><ol>';			

				foreach($rows as $row)
				{
					echo '<li>' . $row['step'] . '</li>';
				}			

				echo '</ol>';
			}			

			?>						


		</article>

	<p class="single-back-link news-back-link"><a href="<?php echo home_url(); ?>/blog" class="btn-text"><span class="icon-arrow-left"></span> All News</a></p>

	</div> <!-- /.col-md-8 -->
 

		<div class="col-sm-4 blog-sidebar">	
			<?php get_sidebar( 'dyno' ); ?>						
		</div>	<!-- /.col-md-4 -->

</div>	<!-- /.row -->

</div> <!-- /.container -->
</div> <!-- /.page-wrap -->

<?php get_footer(); ?>