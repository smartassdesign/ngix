<?php
/*
  Template Name: FND Page
*/
?>

<?php get_header(); the_post(); ?>

<div class="page-wrap raw">
<!-- <div class="alert alert-success alert-dismissible" role="alert" style="background-color: #6ca438; border-color: transparent; text-align: center; margin-bottom: 0;"><a href="#bastille-day" style="color: white">Join us for a very special <strong>Bastille Day Dinner</strong> on July 14th.</a></div>  -->

<section id="intro" class="pod">
	<div class="container">     
		<h1 class="large">3 Gourmet Courses: Healthy, Delicious and BYOB.</h1>
		<p class="lede">On Friday night, we set the tables, light the candles and put our chefs to work creating a family dinner like no other in New York City. Each week features a unique 3-course vegetarian meal prepared by Chef’s Training Program students and instructors. We use seasonal, local, fresh, traditional and whole ingredients, often vegan and/or gluten-free. BYOB and only $45, Friday Night Dinner is one of the best values for a night out on the town to be had in this city.</p>
	</div> <!-- /.container -->   
</section> <!-- /#intro -->

<aside class="photo-break photo-break-fnd-1"></aside>


<div class="pod-mini bg-white">
	<div class="container-fluid">
		<div class="row">	

			<div class="col-xs-4">
				<img src="/assets/fnd-nymag.png" class="img-fluid" alt="New York Critic's Pick">
			</div> <!-- /.col-md-4 -->
			
			<div class="col-xs-4">
				<img src="/assets/fnd-cbsny.png" class="img-fluid" alt="CBS New York Best Things to Do in New York">
			</div> <!-- /.col-md-4 -->
			
			<div class="col-xs-4">
				<img src="/assets/fnd-time-out.png" class="img-fluid" alt="Time Out New York Best of New York 2013">
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container-fluid -->
</div>	<!-- /.pod-mini bg-white -->





	
	
	
	
	<div class="container">
		
		<?php
		  $the_query = new WP_Query(array(
		    'post_type' => 'friday',
		    'orderby' => 'date',
		    'order' => 'ASC',
		    'posts_per_page' => -1
		  ));		

		  while ($the_query->have_posts()) :
		    $the_query->the_post();		

		  ?>

		<div class="fnd-entry sub-pod">
			<div class="row">
				<div class="col-md-8">
					<header>	
			      		<h2>Friday, <?php the_title(); ?><?php
			    				if(get_field('fnd_time')) {
			      				echo '<span class="small">' . get_field('fnd_time') . '</span>';
			    				}
			    			?>	</h2>
					</header>
				</div> <!-- /.col-md-8 -->

				<div class="col-md-4">	
					      <form action="<?php echo esc_url( add_query_arg( 'wootickets_process', 1, $woocommerce->cart->get_cart_url() ) ); ?>" class="cart" method="post" enctype='multipart/form-data'>
					          <table width="100%" class="tribe-events-tickets">
					            <input type='hidden' name='product_id[]' value='<?php the_field('fnd-product'); ?>'>
					            <tr style="display:none">
					              <td width='75' class='woocommerce'>
					                <div class="quantity">
					                  <input type="number" step="1" min="1" max="82" name="quantity_<?php the_field('fnd-product'); ?>" value="1" title="Qty" class="input-text qty text" size="4" />
					                </div>
					              </td>
					              <td class='tickets_price'>
					                <span class="amount">&#36;45.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td colspan="2" class='woocommerce'>
					                <button type="submit" class="btn btn-primary btn-block">Make a Reservation</button>
					              </td>
					            </tr>
					          </table>
					      </form>
				</div> <!-- /.col-md-4 -->	
			</div> <!-- /.row -->

			<div class="row">
				<div class="col-md-8 the-meal">	
				 	<?php
				    if(get_field('message')) {
				      echo '<h4>' . get_field('message') . '</h4>';
				    }
				    ?>				

				    <?php
				    if(get_field('appetizer')) {
				      echo '<h4>Appetizer</h4><p>' . get_field('appetizer') . '</p>';
				    }
				    ?>				

				    <?php
				    if(get_field('entree')) {
				      echo '<h4>Entree</h4><p>' . get_field('entree') . '</p>';
				    }
				    ?>
				    
				    <?php
				    if(get_field('dessert')) {
				      echo '<h4>Dessert</h4><p>' . get_field('dessert') . '</p>';
				    }
				    ?>
				</div> <!-- /.col-md-8 -->	

					
				<div class="col-md-4">
					<?php
					if(get_field('benefit_charity')) {
					echo '<aside class="well"><h5>Benefit Charity</h5><p>' . get_field('benefit_charity') . '</p>';
						}
					?>   
					<?php
					if(get_field('benefit_website')) {
					  echo '<p><i class="icon-chain"></i> <a href="' . get_field('benefit_website') . '" target="_blank">Website</a></p></aside> <!-- /.well -->';
					}
					?>
				</div> <!-- /.col-md-4 -->
				
			</div> <!-- /.row -->
		</div> <!-- /.fnd-entry .sub-pod -->

  <?php endwhile; ?>

<?php wp_reset_query(); ?>


	</div> <!-- /.container -->









<!-- background-color: rgba(208,40,95,.17) --> <!-- border-bottom: 8px solid #6ca438; -->
<div class="pod-mini special-event fnd-entry" style="border-top: 8px solid #6ca438">
	<div class="container">
		<div class="row m-b-2">	
			<div class="col-md-12 text-xs-center">
				<h2>The Wellness Project Dinner with Phoebe&nbsp;Lapine</h2>
				<img src="http://naturalgourmetinstitute.com/assets/PL.com_Classes4.jpg" class="img-fluid m-b-2">	
			</div> <!-- /.col-md-12 -->	
		</div> <!-- /.row -->

		<div class="row">	
			<div class="col-md-8 the-meal">
				<h4 style="margin-bottom: 5px">First Course</h4> 
				<p>Roasted Carrot-Fennel Soup with Frond Gremolata</p>
				<h4 style="margin-bottom: 5px">Second Course</h4>
				<p>Grilled Romaine Hearts with Roasted Artichokes, Green Goddess Dressing and Brazil Nut Pangritata</p>
				<h4 style="margin-bottom: 5px">Third Course</h4>
				<p>Lemon-Turmeric Braised Summer Vegetables with Quinoa Mujadara</p>
				<h4 style="margin-bottom: 5px">Dessert</h4>
				<p>Golden Milk Chia Pudding with Cinnamon Coconut Yogurt and Spicy Pepitas</p>

			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
							<form action="<?php echo esc_url( add_query_arg( 'wootickets_process', 1, $woocommerce->cart->get_cart_url() ) ); ?>" class="cart" method="post" enctype='multipart/form-data'>
					          <table width="100%" class="tribe-events-tickets">
					            <input type='hidden' name='product_id[]' value='28135'>
					            <tr style="display:none">
					              <td width='75' class='woocommerce'>
					                <div class="quantity">
					                  <input type="number" step="1" min="1" max="82" name="quantity_28135" value="1" title="Qty" class="input-text qty text" size="4" />
					                </div>
					              </td>
					              <td class='tickets_price'>
					                <span class="amount">&#36;65.00</span>
					              </td>
					            </tr>
					            <tr>
					              <td colspan="2" class='woocommerce'>
					                <button type="submit" class="btn btn-primary btn-block">Make a Reservation</button>
					              </td>
					            </tr>
					          </table>
					      </form>

				<h4 class="m-y-1" style="line-height: 1.5em">					      			
					Tuesday, July 25<br />
					6:30 pm - 9:30 pm<br />
					$65
				</h4>

				<p style="font-size:.85rem">Join <a href="https://phoebelapine.com/" target="_blank">Phoebe Lapine</a>, gluten-free chef, culinary instructor, and creator of the award-winning blog, <a href="https://feedmephoebe.com/" target="_blank">Feed Me Phoebe</a>, for a special dinner event. In celebration of her debut memoir, <a href="http://amzn.to/2o9MTgw" target="_blank">The Wellness Project</a>, this four-course, anti-inflammatory, plant-based menu is a taste of the simple, clean dishes that helped Phoebe heal from a decade of autoimmune disease. <b>Copies of The Wellness Project will be included with the meal, and the evening will conclude with a signing.</b></p>
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->

	</div> <!-- /.container -->
</div>	<!-- /.pod-mini special-event -->	

		<?php /* include("parts/snippets/quote-anthony.php"); */ ?>

<section id="private-event-cta" class="pod-mini bg-green">
	<div class="container">
		<div class="col-md-9">
			<p class="gr-super-lede">Want to book a private party for 10 or more people?</p>
		</div> <!-- /.col-md-9 -->
		<div class="col-md-3">
			<a href="<?php echo home_url(); ?>/private-events" class="btn btn-alpha btn-block">Learn more</a>
		</div> <!-- .col-md-3 -->
	</div> <!-- /.container -->
</section> <!-- /#private-event-cta -->	

</div> <!-- /.page-wrap .raw -->

<?php get_footer(); ?>
