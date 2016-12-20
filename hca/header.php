<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<meta name="description" content="<?php bloginfo('description');?>">

		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged, $gpp;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'chromatic' ), max( $paged, $page ) );

			?>

		</title>

<!-- HEY Code Viewer, you can probably code better than we can... we'd love your help. Write to work-at-smartassdesign.com. Cheers! -->

<!-- Modernizr -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>

<script type="text/javascript">
document.createElement('video');document.createElement('audio');document.createElement('track');
</script>

<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="//vjs.zencdn.net/4.12/video.js"></script>


		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'viewport flexbox' ); ?>>
<header>



	<!-- Fixed navbar -->
	<nav class="navbar navbar-dark bg-inverse navbar-static-top">
	  <div class="container-fluid">
		 <div class="navbar-header">
				<div class="pull-right hidden-lg-up">
					<a id="minihamburger-icon" data-toggle="collapse" data-target="#navbar-mobile">  
					<span class="line line-1"></span><span class="line line-2"></span><span class="line line-3"></span></a>
				</div>


			<a class="navbar-brand text-hide" href="<?php bloginfo('url');?>">Natural Gourmet Institute for Health and Culinary Arts</a>
		</div> <!-- /.navbar-header -->
		<div class="hidden-md-down">
			<?php
					wp_nav_menu( array(
						'menu'              => 'Primary Menu',
						'theme_location'    => 'primary',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'navbar-default pull-right',
						'container_id'      => 'navbar',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
							);
			  ?>
		  </div> <!-- /.hidden-md-down -->
		  <div class="hidden-lg-up">
		  <?php
				  wp_nav_menu( array(
					  'menu'              => 'Mobile Menu',
					  'theme_location'    => 'mobile',
					  'depth'             => 1,
					  'container'         => 'div',
					  'container_class'   => 'collapse navbar-collapse navbar-default ',
					  'container_id'      => 'navbar-mobile',
					  'menu_class'        => 'nav navbar-nav',
					  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					  'walker'            => new wp_bootstrap_navwalker())
						  );
			 ?>
		 </div> <!-- /.hidden-lg-up -->
		</div><!--  /.container-fluid -->
	</nav>

<?php /* <div id="the-dropper" class="dropper collapse">

	<?php get_template_part('layouts/dropper');  ?>

</div> <!-- /.dropper -->

*/ ?>


<?php if ( is_front_page()) { ?>
<div class="the-subnav bg-green hidden-md-down">
	<div class="container-fluid">

		<div class="col-sm-6">
			<ul class="list-unstyled list-inline">
				<li class="sub-link"><a href="#overview">Overview</a></li>
				<li class="sub-link"><a href="#tuition-info">Tuition</a></li>
				<li class="sub-link"><a href="#open-house">Open Houses</a></li>
			</ul>
		</div> <!-- /.col-sm-6 -->

		<div class="col-sm-6">
			<ul class="list-unstyled list-inline text-right">
				<li class="sub-link"><a href="/faq">FAQ</a></li>
				<li><a href="#" class="btn btn-info-outline" data-toggle="modal" data-target="#infoModal">Request Info</a></li>
				<li><a href="<?php bloginfo('url');?>/apply" class="btn btn-info">Apply Now</a></li>
			</ul>
		</div> <!-- /.col-sm-6 -->

	</div> <!-- /.container-fluid -->
</div> <!-- /.the-subnav -->
<?php } ?>

</header>
<main class="site-content">


		<?php
				wp_nav_menu( array(
					'menu'              => 'Secondary Menu',
					'theme_location'    => 'secondary',
					'depth'             => 1,
					'container'         => 'div',
					'container_class'   => 'navmenu navmenu-default navmenu-fixed-right offcanvas ',
					'container_id'      => 'sidemenu',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
						);
		  ?>

<!-- <div id="pjax-container"> -->
