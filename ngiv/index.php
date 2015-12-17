<?php get_header(); the_post(); ?>

<div class="container">
	<article id="<?php echo $post->post_name;?>">

		<?php the_content(); ?>

	</article>

</div>	<!-- /.container -->

<?php get_footer(); ?>
