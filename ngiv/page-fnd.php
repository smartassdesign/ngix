<?php
/*
  Template Name: FND Page
*/
?>

<?php get_header(); the_post(); ?>

<div class="page-wrap raw">
<div class="alert alert-success alert-dismissible" role="alert" style="background-color: #6ca438; border-color: transparent; text-align: center; margin-bottom: 0;"><a href="#bohemian-dinner" style="color: white">Join us for a very special dinner &mdash; <strong>Bohemia Three ways: Food, Style, Culture</strong> on November 10th.</a></div>

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


<section id="bohemian-dinner">
<div class="pod-mini special-event fnd-entry" style="border-top: 8px solid #6ca438">
	<div class="container">
		<div class="row m-b-2">	
			<div class="col-md-12 text-xs-center">
				<h2>Bohemia Three ways: Food, Style, Culture</h2>
				<img src="http://naturalgourmetinstitute.com/wp-content/uploads/ngi-fnd-bohemian.jpg" class="img-fluid fnd-inline" style="float: left; height: 270px; margin-right: 20px; margin-bottom: 20px;">
				
            <div class="well text-xs-left" style="font-size: 22px; padding: 40px; background: #fff">
			<p>Dine in for a 3-course, plant-based menu by Chef Elliott Prag that draws inspiration from Bohemia and all that its rooted within: (1) food traditions of the lands that were once named Bohemia, (2) modern-day Bohemian interior design, and (3) a lifestyle of Bohemianism with like-minded artists, musicians, journalists, and adventurers.</p>
				 
			<p>Guests will receive a copy of Justina Blakeney’s, <em>The New Bohemians Handbook: Come Home to Good Vibes,</em> with their ticket.</p>
				 
			<p style="margin-bottom: 0;"><em>The New Bohemian Handbook</em> guides readers in beautifully simple techniques for adding good vibes and style to living spaces. Packed with hundreds of ideas for bringing positive energy to your home, the book features exercises and activities for thinking about rooms in new ways. Uncover your “spirit environment” and learn how to use color and scent to enhance mood, productivity, and relaxation.</p>
            </div>
				
			</div> <!-- /.col-md-12 -->	
		</div> <!-- /.row -->

		<div class="row">	
			<div class="col-md-8 the-meal">
				<h4 style="margin-bottom: 5px">On the Table</h4> 
				<p>Grilled Pumpernickel with White Bean Spread (Dill, Lemon, Garlic)</p>
				<h4 style="margin-bottom: 5px">Appetizer</h4> 
				<p>Romaine Hearts, Frisee, Radicchio, Cucumber, Toasted Almonds, Roasted Red Pepper, Kalamata Olives, Lemon-Poppy Seed Vinaigrette <br />Pureed Cauliflower Soup, Paprika Oil, Crisp Leeks, and Capers</p>
				<h4 style="margin-bottom: 5px">Main</h4>
				<p>Strudel of Forest Mushrooms, Toasted Walnuts, Shallots <br />Red Wine Reduction Sauce <br />Red Cabbage Sauerkraut with Caraway and Sautéed Apples
				Roasted Potatoes with Mint, Parsley, Sumac, Aleppo Pepper, and Lemon
				Roasted Brussels Sprouts with Frizzled Leeks, Pomegranate, and Almonds</p>
				<h4 style="margin-bottom: 5px">Dessert</h4>
				<p>Palacsinta (Hungarian Crepes)<br />
				Chocolate Mocha Mousse<br />
				Chocolate-Mint Ice Cream<br />
				Vanilla Bean Mousse with Cacao Nibs<br />
				Chocolate-Kirsch Sauce<br />
				Hibiscus Reduction</p>
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
							<form action="<?php echo esc_url( add_query_arg( 'wootickets_process', 1, $woocommerce->cart->get_cart_url() ) ); ?>" class="cart" method="post" enctype='multipart/form-data'>
					          <table width="100%" class="tribe-events-tickets">
					            <input type='hidden' name='product_id[]' value='32268'>
					            <tr style="display:none">
					              <td width='75' class='woocommerce'>
					                <div class="quantity">
					                  <input type="number" step="1" min="1" max="82" name="quantity_32268" value="1" title="Qty" class="input-text qty text" size="4" />
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
					Friday, November 10<br />
					6:30 pm - 9:30 pm<br />
					$55
				</h4>

			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->

	</div> <!-- /.container -->
</div>	<!-- /.pod-mini special-event -->	
</section>


</div> <!-- /.page-wrap .raw -->

<?php get_footer(); ?>
