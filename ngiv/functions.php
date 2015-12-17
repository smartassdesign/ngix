<?php

/**
 * Enqueue scripts and styles.
 */

 add_action('wp_enqueue_scripts', 'no_more_jquery');
 function no_more_jquery(){
     wp_deregister_script('jquery');
     wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js", false, null);
     wp_enqueue_script('jquery');
 }


 	add_action( 'wp_enqueue_scripts', 'hca_load_javascript_files' );
 	function hca_load_javascript_files() {


   wp_enqueue_script( 'global', get_stylesheet_directory_uri() . '/assets/js/global-min.js', array( 'jquery' ), '1.0', true );   

   wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/assets/js/app-min.js', array( 'jquery' ), '1.0', true );


 	}



	function hca_scripts() {
		// Load our main stylesheet.
		wp_enqueue_style( 'hca-main', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), null );
		wp_enqueue_style( 'graphik', get_stylesheet_directory_uri() . '/assets/fonts/1406-HQUNKE.css', array(), null );
		wp_enqueue_style( 'austin', get_stylesheet_directory_uri() . '/assets/fonts/1406-LUHPIO.css', array(), null );
		// wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/inc/slick/slick.css', array(), null );
		// wp_enqueue_style( 'slicks-css', get_stylesheet_directory_uri() . '/inc/slick/slick-theme.css', array(), null );
		// wp_enqueue_style( 'royal-css', get_stylesheet_directory_uri() . '/inc/royalslider/royalslider.css', array(), null );
		// wp_enqueue_style( 'royal-universal', get_stylesheet_directory_uri() . '/inc/royalslider/skins/universal/rs-universal.css', array(), null );
		// wp_enqueue_style( 'royal-default', get_stylesheet_directory_uri() . '/inc/royalslider/skins/default/rs-default.css', array(), null );
	}
	add_action( 'wp_enqueue_scripts', 'hca_scripts' );




require_once('inc/quickcontent.php');


// REGISTER NAV AND MENUS
    require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'ngiv' ),
		 'secondary' => __( 'Secondary Menu', 'ngiv' ),
		 'mobile' => __( 'Mobile Menu', 'ngiv' ),
	) );


// Add page title to body class
	function bid_add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
	add_filter( 'body_class', 'bid_add_slug_body_class' );




	// ADD SEARCH TO NAV
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

 function add_search_form($items, $args) {
          if( $args->theme_location == 'primary' )
          $items .= '<a id="hamburger-icon" class="offcanvas-toggle" data-toggle="offcanvas" data-target="#sidemenu" data-canvas="body">  <span class="line line-1"></span><span class="line line-2"></span><span class="line line-3"></span></a>';
     return $items;
}



// MAKE AN OPTIONS PAGE


if( function_exists('acf_add_options_page') ) {

  $page = acf_add_options_page(array(
    'page_title'  => 'Options Page',
    'menu_title'  => 'Options Page',
    'menu_slug'   => 'options-page',
    'capability'  => 'edit_posts',
    'redirect'  => false
  ));

}



/**
 * Page: Chefs training program
 * Dynamically add the open house date as a value to a hidden input of the open house form.
 *
 * @documentation: http://www.gravityhelp.com/documentation/page/Using_Dynamic_Population#Hooks
 */
add_filter('gform_field_value_oh_date_time', 'my_custom_population_function');
function my_custom_population_function($value){

  // Get the date
  $date = DateTime::createFromFormat('Ymd', get_field('open_house_date', 'option'));
  // Format the date
  $date_formatted = $date->format('F j, Y');

  // Get the time
  $time = get_field('open_house_time', 'option');

  return (!$date_formatted || !$time) ? 'Date and time were not both set.' : $date_formatted.' at '.$time;
}






// ACTIVATION PG TEXT


function rgbook_activate_page_action() {
    add_filter('ngettext', 'rgbook_activate_page_change_text' );
    add_filter('gettext', 'rgbook_activate_page_change_text' );
}
add_action( 'activate_header', 'rgbook_activate_page_action' );

function rgbook_activate_page_change_text( $text ) {
    $search = '<a href="%1$s">Log in</a> or go back to the <a href="%2$s">homepage</a>.';
    $replace = '<a href="/alumni/job-board/">Click here to log in now</a>.';

    return str_ireplace($search, $replace, $text);
}



// PAGINATION

require_once('inc/wp_bootstrap_pagination.php');

function customize_wp_bootstrap_pagination($args) {

    $args['previous_string'] = '<small><span class="icon-controller-fast-backward"></span></small>';
    $args['next_string'] = '<small><span class="icon-controller-fast-forward"></span></small>';

    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');







/* KEEP 600: THE SIDEBARS */

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id' => 'primary',
            'name' => __( 'Primary' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id' => 'dyno',
            'name' => __( 'Dyno' ),
            'description' => __( 'Primary dynamic sidebar for NGI.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );

    /* Repeat register_sidebar() code for additional sidebars. */
}








// ALL NEXT GEN WOO OVERRIDES


add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}


add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );      // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}




/* KEEP 1501: TRIBE - GLOBAL CHANGE of EVENTS to CLASSES on BACK END */

add_filter( 'tribe_event_label_singular', 'event_display_name' );
function event_display_name() {
  return 'Class';
}

add_filter( 'tribe_event_label_plural', 'event_display_name_plural' );
function event_display_name_plural() {
  return 'Classes';
}

if (class_exists('Tribe__Tickets_Plus__Commerce__WooCommerce__Main')) {
  remove_action( 'tribe_events_single_event_after_the_meta', array( Tribe__Tickets_Plus__Commerce__WooCommerce__Main::get_instance(), 'front_end_tickets_form'), 5 );
  add_action( 'tribe_events_single_event_before_the_content', array( Tribe__Tickets_Plus__Commerce__WooCommerce__Main::get_instance(), 'front_end_tickets_form'), 5 );
}




