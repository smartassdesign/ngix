<?php get_header(); the_post(); ?>

	 <div class="container">

<div class="row">
	<div class="col-sm-12">

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



		</article>

	<p class="single-back-link news-back-link"><a href="<?php echo home_url(); ?>/alumni/job-board" class="btn-text"><span class="icon-arrow-left"></span> All Jobs</a></p>

</div> <!-- /.col-md-12 -->


</div>	<!-- /.row -->

</div> <!-- /.container -->

<?php get_footer(); ?>
