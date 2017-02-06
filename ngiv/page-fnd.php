<?php
/*
  Template Name: FND Page
*/
?>

<?php get_header(); the_post(); ?>

<div class="page-wrap raw">

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

<!-- background-color: rgba(208,40,95,.17) -->
<div class="pod-mini special-event" style="border-top: 8px solid rgb(208,40,95); border-bottom: 8px solid rgb(208,40,95);">
	<div class="container">
		<div class="row m-b-2">	
			<div class="col-md-12 text-xs-center">
				<h2>Dine-in Movie: Breakfast at Tiffany’s</h2>
			</div> <!-- /.col-md-12 -->	
		</div> <!-- /.row -->

		<div class="row">	
			<div class="col-md-8">
				<h4 style="margin-bottom: 5px">For the Table</h4>
				<p>Everything Bagel Popcorn</p>
				<h4 style="margin-bottom: 5px">First</h4> 
				<p>Fennel-Citrus Salad with Spiced Pistachio “Granola” and Lemon Vinaigrette</p>
				<h4 style="margin-bottom: 5px">Second</h4>
				<p>Butternut Squash Frittata with Fried Sage, Served with Potatoes Lyonnaise, and Crispy-Roasted Broccolini</p>
				<h4 style="margin-bottom: 5px">Dessert</h4>
				<p>Mini Cinnamon-Sugar Waffles Topped with Coconut-Banana Ice Cream</p>
				<h4 style="margin-bottom: 5px">Take Away</h4>
				<p>Individually Wrapped Packages of Espresso Almond Butter and Peanut Butter Banana Jam Vegan Chocolates by Eat Chic Chocolates</p>

				<img src="http://naturalgourmetinstitute.com/assets/ngi-waffles.jpg" class="img-fluid m-y-2">				
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
							<form action="<?php echo esc_url( add_query_arg( 'wootickets_process', 1, $woocommerce->cart->get_cart_url() ) ); ?>" class="cart" method="post" enctype='multipart/form-data'>
					          <table width="100%" class="tribe-events-tickets">
					            <input type='hidden' name='product_id[]' value='25443'>
					            <tr style="display:none">
					              <td width='75' class='woocommerce'>
					                <div class="quantity">
					                  <input type="number" step="1" min="1" max="82" name="quantity_25443" value="1" title="Qty" class="input-text qty text" size="4" />
					                </div>
					              </td>
					              <td class='tickets_price'>
					                <span class="amount">&#36;55.00</span>
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
					Tuesday, February 14<br />
					6:30 pm - 9:30 pm<br />
					$45
				</h4>


				<p style="font-size:.85rem">Join us at NGI for this once-in-a-lifetime dinner and movie event where you can finally eat breakfast for dinner in public (we see you, dinner eggs), alongside others who like to do the same. The beloved film, Breakfast at Tiffany’s, will play in the background as you sip on BYOB, blood orange mimosas* and enjoy a 3-course, vegetarian meal inspired by our favorite breakfast foods. Bring your valentine or a group of friends for a unique dinner experience and leave with tasty treats provided by <a href="https://www.eatchicchocolates.com/" target="_blank">Eat Chic Chocolates</a>.</p>
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->

	</div> <!-- /.container -->
</div>	<!-- /.pod-mini special-event -->



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

		<?php include("parts/snippets/quote-anthony.php"); ?>

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