<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); the_post(); ?>


<div class="sliderContainer fullWidth clearfix">
	<div id="full-width-slider" class="royalSlider heroSlider rsDefault">

		<!-- ADD THE NEXT FEATURED CLASS OR TWO -->

			<?php
			global $post;
			$all_events = tribe_get_events(array(
			'start_date'=>'upcoming',
			'posts_per_page'=>-1,
			'tax_query'=> array(
			array(
			'taxonomy' => 'tribe_events_cat',
			'field' => 'slug',
			'terms' => 'featured'
			)
			)
			));

			foreach($all_events as $post) {
			setup_postdata($post);
			?>

			<div class="ngi-slide bg-dark">
<!-- 				<a class="rsContent" href="<?php the_permalink(); ?>"> -->

						<?php $image = get_the_image( array( 'format' => 'array' ) ); ?>

						<img class="rsImg" src=<?php echo $image['src']; ?> alt="">
						<div class="infoBlock rsABlock infoBlockLeftBlack ngi-slider" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
							<div class="hero-slide-text">
								<h5>Featured Class</h5>
								<h2><?php the_title(); ?></h2>
								<a class="slider-button btn btn-default btn-sm" href="<?php the_permalink(); ?>">Check it out...</a>
							</div>
						</div>
				<!-- </a> -->
			</div>

			<?php } //endforeach ?>

			<?php wp_reset_query(); ?>


		<!-- GET ANYTHING PUT IN THE ADMIN FOR THE SLIDER -->


		<?php
			 $the_query = new WP_Query(array(
			'post_type' => 'slides',
			'posts_per_page' => -1
			 ));
			 while ($the_query->have_posts()) :
			$the_query->the_post();
			 ?>
			 <?php $slideImage = get_field('image'); ?>
			<div class="ngi-slide bg-dark">
				<img class="rsImg" src="<?php echo $slideImage; ?>" alt="" />
				<div class="infoBlock rsABlock infoBlockLeftBlack ngi-slider" data-fade-effect="" data-move-offset="10" data-move-effect="bottom" data-speed="200">
					<div class="hero-slide-text">
						<?php the_field('slide_description'); ?>
						<a class="slider-button btn btn-default btn-sm" href="<?php the_field('slide_link'); ?>"><?php the_field('slide_button'); ?></a>
					</div>
			  	</div>
			</div>
			 <?php endwhile; ?>

			<?php wp_reset_query(); ?>
		<!-- RESET THE QUERY AND CLOSE THE SLIDER -->



	</div><!-- /.full-width-slider -->
</div><!-- /.sliderContainer -->


<div class="page-wrap raw">

		<!-- START HOME CONTENT HERE (No containers, so everyone's on his own.) -->

		<section id="mission" class="pod">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- <h1 class="tera">Creating a global network of healthy gourmets &mdash; since&nbsp;1977.</h1>  -->
						<h1 class="tera">Kale, Quinoa &amp; Community since&nbsp;1977.</h1>
						<div align="center"><h3>Seasonal • Local • Whole • Traditional • Balanced • Fresh • Delicious</h3></div>

					</div> <!-- /.com-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section> <!-- /#mission .pod-mega .bg-white -->


<section id ="manifesto" class="pod text-xs-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4>The NGI Manifesto</h4>
				<dl>
					<dt>Preparing</dt>
					<dd>food that is: seasonal, local, whole, traditional, balanced, fresh and&nbsp;delicious.</dd>
					<dt>Embracing</dt>
					<dd>that what we eat significantly affects our physical, mental and spiritual&nbsp;well-being.</dd>
					<dt>Understanding</dt>
					<dd>that each individual thrives on a diet unique to their specific&nbsp;needs.</dd>
					<dt>Providing</dt>
					<dd>exceptional, innovative and interdisciplinary education.</dd>
					<dt>Empowering</dt>
					<dd>individuals and communities to take charge of their own health and&nbsp;well-being.</dd>
					<dt>Creating</dt>
					<dd>a professional and nurturing environment where students and employees are able to realize their full&nbsp;potential.</dd>
					<dt>Supporting</dt>
					<dd>the creation and maintenance of a sustainable food system by building connections with suppliers and taking on broader advocacy&nbsp;initiatives.</dd>
				</dl>
				<a href="<?php echo home_url(); ?>/about" class="btn-text">Learn more about our history <span class="icon-arrow-right"></span></a>
			</div>	<!-- /.col-sm-6 -->


		</div>	<!-- /.row -->
	</div>	<!-- /.container -->
</section> <!-- /#manifesto .pod -->


		<aside class="photo-break photo-break-home-1 bg-dark">
			<div class="container btmbtm">
				<div class="row">
					<div class="col-md-9 col-md-offset-3">
						<h1 class="large">Start your journey to become a chef&nbsp;today.</h1>
						<h4>Visit the New Natural Gourmet Center</h4>
						<a href="https://www.ice.edu/newyork/career-programs/natural-gourmet-center?mcid=62897" class="slider-button btn btn-default btn-sm">Visit</a>
					</div> <!-- /.col-md-9 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</aside>


		<?php include("layouts/recent-news.php"); ?>



<div id="instafeed"></div>


<script src="<?php bloginfo('template_url'); ?>/assets/js/instafeed.min.js"></script>

<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      userId: 487638934,
        accessToken: '487638934.467ede5.bfd3ad67d845455f94b347664250266f',
      link: 'true',
      clientId: '248fb38e152a4886b0a0d451ad0b33ef',
      resolution: 'standard_resolution',
      limit: '7',
       template: '<a href="{{link}}" target="_blank" class="nginstagram img-responsive"><img src="{{image}}" /><div class="content"><div class="caption">{{caption}}</div><div class="meta">{{location}}</div></div></a>'
      });
      feed.run();
</script>


<section id="request-info" class="pod-mini bg-green">
	<div class="container">
		<div class="col-md-9">
			<p class="gr-super-lede">Interested in the Chef's Training Program?</p>
		</div> <!-- /.col-md-9 -->
		<div class="col-md-3">
			<a href="http://ngihca.edu" class="btn btn-alpha btn-block">Click Here</a>
		</div> <!-- .col-md-3 -->
	</div> <!-- /.container -->
</section> <!-- /#open-house -->

</div> <!-- /.page-wrap .raw -->


<?php get_footer(); ?>
