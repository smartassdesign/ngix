<?php get_header(); the_post(); ?>

<?php //get all the posts however your query does it. simple example when there aren't a lot: 
$args = array("nopaging" => true);
$posts = (new WP_Query($args))->posts;

//filter the posts array by looking up the thumb_url and seeing if it's empty
$posts_without_thumbnails = array_filter($posts,  function($post){
  $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
  return ( wp_get_attachment_thumb_url( $post_thumbnail_id ) == "");
} ); ?>

<div class="container">
	<article id="<?php echo $post->post_name;?>">

		<?php the_content(); ?>

	</article>

</div>	<!-- /.container -->

<?php get_footer(); ?>
