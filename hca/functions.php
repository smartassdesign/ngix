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

 	 wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/assets/js/app-min.js', array( 'jquery' ), '1.0', true );


 	}


	add_action('wp_enqueue_scripts', 'load_ctp_scripts');


	function load_ctp_scripts() {

	        wp_register_script('wistia', 'https://fast.wistia.com/assets/external/E-v1.js');
	        wp_register_script('wistiacrop', 'https://fast.wistia.com/labs/crop-fill/plugin.js');
	        wp_register_script( 'wista', get_template_directory_uri() . '/assets/js/wista.js', array('jquery'), '', true );


	      if ( is_front_page()  ) {
	        wp_enqueue_script('wistia');
	        wp_enqueue_script('wistiacrop');
	        wp_enqueue_script('wista');
	    }
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


	function remove_styles() {

	wp_dequeue_style( 'wp-job-manager-frontend' ); // JOB MANAGER

	}

	add_action('wp_print_styles','remove_styles',1);


require_once('inc/quickcontent.php');


// REGISTER NAV AND MENUS
    require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'hca' ),
		 'secondary' => __( 'Secondary Menu', 'hca' ),
		 'mobile' => __( 'Mobile Menu', 'hca' ),
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
          $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a data-toggle="collapse" href="#the-dropper">Dropper</a></li>

      <li class="menu-item menu-item-type-post_type menu-item-object-page nav-item dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      </div>
      <li>

          
        <a id="hamburger-icon" class="offcanvas-toggle" data-toggle="offcanvas" data-target="#sidemenu" data-canvas="body">  <span class="line line-1"></span><span class="line line-2"></span><span class="line line-3"></span></a>';
     return $items;
}


// ADD SALARY FIELD TO JOBS

add_filter( 'submit_job_form_fields', 'frontend_add_salary_field' );
function frontend_add_salary_field( $fields ) {
  $fields['job']['job_salary'] = array(
    'label' => __( 'Salary', 'job_manager' ),
    'type' => 'text',
    'required' => false,
    'placeholder' => '',
    'priority' => 7
  );
  return $fields;
}

add_action( 'job_manager_update_job_data', 'frontend_add_salary_field_save', 10, 2 );
function frontend_add_salary_field_save( $job_id, $values ) {
  update_post_meta( $job_id, '_job_salary', $values['job']['job_salary'] );
}

add_filter( 'job_manager_job_listing_data_fields', 'admin_add_salary_field' );
function admin_add_salary_field( $fields ) {
  $fields['_job_salary'] = array(
    'label' => __( 'Salary', 'job_manager' ),
    'type' => 'text',
    'placeholder' => '',
    'description' => ''
  );
  return $fields;
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

