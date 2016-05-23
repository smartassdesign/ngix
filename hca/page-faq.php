<?php
/*
	Template Name: FAQ Page
*/
?>

<?php get_header(); the_post(); ?>

	<div class="page-wrap">

		<div class="container">
			<div class="row m-t-lg">
				<div class="col-md-12">
					

<?php 
$counter = 0;
?>




<div class="row">
	<div class="col-md-8">

				<h2 class="m-t-md">Professional Chef's Training Program FAQ’s</h2>


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

				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->					



				</div> <!-- /.col-md-12 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container -->
	</div> <!-- /.page-wrap -->

<?php get_footer(); ?>
