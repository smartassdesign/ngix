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


<div class="pod-mini special-event" style="background-color: rgba(208,40,95,.17)">
	<div class="container">
		<div class="row m-b-2">	
			<div class="col-md-12 text-xs-center">
				<h2>A Special Dinner Event: Summer Salutation with the Crunchy Radish</h2>
			</div> <!-- /.col-md-12 -->	
		</div> <!-- /.row -->

		<div class="row">	
			<div class="col-md-8">
				<h4 style="margin-bottom: 5px">For the Table</h4>
				<p>Hummus with Pea and Mint Pesto, Roasted Spiced Baby Carrots, and Toasted Pistachios; Muhammara; Seasonal Baby Vegetables and Flaxseed Crackers; Paprika-Cumin Poppers</p>
				<h4 style="margin-bottom: 5px">Appetizer</h4> 
				<p>Beet Tartare with Beet Green Chip; Green Gazpacho Shooter</p>
				<h4 style="margin-bottom: 5px">Entrée</h4>
				<p>Polenta Made with Charred Corn Topped with Eggplant-Tomato Caponata and Fresh Herbs; Sauteed Seasonal Greens with Garlic Chips</p>
				<h4 style="margin-bottom: 5px">Dessert</h4>
				<p>Seasonal Fruit Walnut-Oat Crumble with Honey-Lavender Ice Cream; Coconut-Raspberry Popsicle Dipped in Dark Chocolate, Coconut, Pistachios and Sea Salt; Brooklyn Roasting Company Coffee</p>
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
							<form action="<?php echo esc_url( add_query_arg( 'wootickets_process', 1, $woocommerce->cart->get_cart_url() ) ); ?>" class="cart" method="post" enctype='multipart/form-data'>
					          <table width="100%" class="tribe-events-tickets">
					            <input type='hidden' name='product_id[]' value='21130'>
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

				<h4 class="m-y-1" style="line-height: 1.5em">					      			
					Tuesday, August 9<br />
					6:30 pm - 9:30 pm<br />
					$45
				</h4>

				<img src="https://i0.wp.com/naturalgourmetinstitute.com/wp-content/uploads/Crunchy-Radish.png" class="img-fluid m-y-2">

				<p>Join Miranda Hammer, creator of the renowned Crunchy Radish blog, for a special dinner event. In celebration to her recent completion of our Chef’s Training Program, the Mediterranean-inspired plant-based menu is a salute to summer’s bounty featuring local produce and seasonal flavors.</p>
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->

		<hr>

		<div class="row">	
			<div class="col-md-12">
				<p><small><b>Miranda Hammer</b> is a New York City-based Registered Dietitian, natural foods chef, and founder of the clean-eating, healthy-living blog <a href="http://crunchyradish.com/" target="_blank">Crunchy Radish</a>. She recently completed the Chef's Training Program at the Natural Gourmet Institute for Health and Culinary Arts. After obtaining her masters in Clinical Nutrition from New York University, she went on to work as a Clinical Dietitian at Montefiore Medical Center. Later, Miranda shifted her focus to the culinary side of nutrition and started writing about health and wellness and developing health-focused recipes. Her health and wellness philosophy focuses on plant-based, seasonal eating, and balanced living. She works with private clients on various nutritional and lifestyle issues and develops recipes and content for brands and media outlets. You can find her work featured on <em>Mindbodygreen, Vogue, Well + Good,</em> and  <em>Self Magazine</em> to name a few.</small></p>
			</div> <!-- /.col-md-12 -->	
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