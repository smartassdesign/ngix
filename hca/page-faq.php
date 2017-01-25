<?php
/*
	Template Name: FAQ Page
*/
?>

<?php get_header(); the_post(); ?>

	<div class="page-wrap">

		<div class="container">
			<div class="row m-y-lg">
				<div class="col-md-12">
					

<?php 
$counter = 0;
?>




<div class="row">
	<div class="col-md-8">

				<h1 class="h2 m-t-md">Professional Chef&rsquo;s Training Program FAQ&rsquo;s</h1>


					<?php if( have_rows('faq_entry') ): ?>

			<div class="panel-group" id="faq-group">

						<?php while( have_rows('faq_entry') ): the_row(); 

							// vars
							$faqq = get_sub_field('faq_question');
							$faqa = get_sub_field('faq_answer');	
							$numeral = $counter++;
							?>

			<div class="panel">
				<div class="panel-heading">
					<h4><a data-toggle="collapse" data-target="#<?php echo $numeral; ?>" data-parent="#faq-group" class="panel-plus collapsed"><?php echo $faqq; ?></a></h4>
				</div> <!-- /.panel-heading -->	
						<div id="<?php echo $numeral; ?>" class="collapse panel-collapse">
							<div class="panel-body">
								<p><?php echo $faqa; ?></p>
							</div> <!-- /.panel-body -->
						</div> <!-- /#payment-plans -->
			</div> <!-- /.panel -->

						<?php endwhile; ?>

						</div> <!-- /.panel-group -->

					<?php endif; ?>


			<div class="text-xs-center m-y-md p-t-md cta">
				<p><a class="btn-text" href="<?php bloginfo('url');?>/assets/2017-NGIHCA-Catalog.pdf">Chef’s Training Program Catalog <span class="icon-arrow-down"></span></a></p>
				<a href="#" class="btn btn-lg btn-primary-outline" data-toggle="modal" data-target="#infoModal">Request Info</a>
				<a href="<?php bloginfo('url');?>/apply" class="btn btn-lg btn-primary">Apply Now</a>
			</div>

				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->					

				</div> <!-- /.col-md-12 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container -->


	</div> <!-- /.page-wrap -->

	<?php get_template_part('quick/modal-info'); ?>

<?php get_footer(); ?>
