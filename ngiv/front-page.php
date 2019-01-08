<?php
/*
  Template Name: Home Page
*/
?>

<?php get_header(); the_post(); ?>

<div class="page-wrap raw">

		<!-- START HOME CONTENT HERE (No containers, so everyone's on his own.) -->
	
	<section id="closeout">
		<div class="the-notice" style="background:#262626; width: 100%; padding: 30px; "><h2 style="margin-bottom: 0; color:#f6f6f6;">The Natural Gourmet Institute’s health-supportive, plant-based curriculum is now exclusively offered at the Institute of Culinary Education. <a href="https://www.ice.edu/newyork/career-programs/natural-gourmet-center?mcid=62897">Learn more about career training in Health-Supportive Culinary Arts at the new Natural Gourmet Center at ICE.</a></h2></div>
	</section>

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
						<a href="https://www.ice.edu/newyork/career-programs/natural-gourmet-center?mcid=62897" class="slider-button btn btn-default btn-sm">Visit the New Natural Gourmet Center</a>
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
			<p class="gr-super-lede">Interested in career training?</p>
		</div> <!-- /.col-md-9 -->
		<div class="col-md-3">
			<a href="https://www.ice.edu/newyork/career-programs/natural-gourmet-center?mcid=62897" class="btn btn-alpha btn-block">Click Here</a>
		</div> <!-- .col-md-3 -->
	</div> <!-- /.container -->
</section> <!-- /#open-house -->

</div> <!-- /.page-wrap .raw -->


<?php get_footer(); ?>
