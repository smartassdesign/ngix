<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- HEY Code Viewer, you can probably code better than we can... we'd love your help. Write to work-at-smartassdesign.com. Cheers! -->

<!-- Modernizr -->
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1994936330739491');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1994936330739491&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


		<?php wp_head(); ?>
	</head>
	<body <?php body_class( 'viewport flexbox' ); ?>>
<header class="primary-header">



	<!-- Fixed navbar -->
	<nav class="navbar navbar-light bg-unverse navbar-static-top">
	  <div class="container-fluid">
		 <div class="navbar-header">
				<div class="pull-xs-right hidden-lg-up">
	<a id="minihamburger-icon" data-toggle="collapse" data-target="#navbar-mobile">  <span class="line line-1"></span><span class="line line-2"></span><span class="line line-3"></span></a></div>


			<a class="navbar-brand text-hide" href="<?php bloginfo('url');?>">Natural Gourmet Institute</a>
		</div> <!-- /.navbar-header -->
		<div class="hidden-md-down">
			<?php
					wp_nav_menu( array(
						'menu'              => 'Primary Menu',
						'theme_location'    => 'primary',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'navbar-default pull-md-right',
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

	</nav>

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
