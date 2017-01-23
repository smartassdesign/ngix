<div id="open-house" class="pod">
	<div class="container">
		<div class="row">
		<div class="col-md-8">
			<h2>We&rsquo;re Having an Open House.</h2>

			<?php if(get_field('open_house_date', 'option'))
{

	$date = DateTime::createFromFormat('Ymd', get_field('open_house_date', 'option'));
			echo '<h4>';
			echo $date->format('F j, Y');
}
?>

at <?php the_field('open_house_time', 'option'); ?></h4>

			<!-- <h4>Monday, October 12 at 6pm</h4> -->
			<p class="lede">Whether you&rsquo;re weighing a career in the culinary arts or researching schools to find the best program for you, join us and figure it all out.</p>

			<br>
			<p class="small">Licensed by the State of New York and accredited by ACCET</p>

		</div> <!-- /.col-md-9 -->

		<div class="col-md-4">
			<?php echo do_shortcode('[gravityform id="5" name="Open House 7/8 Test" title="false" description="false" ajax="true"]') ?>
		</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->
+</div> <!-- /#open-house .pod -->