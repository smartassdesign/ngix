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



   wp_enqueue_script( 'tether', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array(), '1.1', true );


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

    //unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );      // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}





/* KEEP 500: WOO CHANGES */



// DECLARATION...

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


add_action('woocommerce_before_main_content', 'veg_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'veg_theme_wrapper_end', 10);

function veg_theme_wrapper_start() {
  echo '<div class="container">';
}

function veg_theme_wrapper_end() {
  echo '</div>';
}

add_theme_support( 'woocommerce' );



/* KEEP 502: LOSE SOME CHECKOUT FIELDS */

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['order']['order_comments']);

     return $fields;
}



/* KEEP 503: LOSE ORDER AGAIN BUTTON */

remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );


/* KEEP 504: AUTO COMPLETE ORDERS */

add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) {
    global $woocommerce;
 
    if ( !$order_id )
        return;
    $order = new WC_Order( $order_id );
    $order->update_status( 'completed' );
}



function get_parent_terms($term) {
  if ($term->parent > 0) {
    $term = get_term_by("id", $term->parent, "product_cat");
    if ($term->parent > 0) {
      get_parent_terms($term);
    } else return $term;
  } else return $term;
}

function all_cat_classes($post) {
  $catz = array();

  $terms = get_the_terms($post->id, 'product_cat');

  if(is_array($terms)){
    // foreach product_cat get main top product_cat
    foreach ($terms as $cat) {
      $catz = get_parent_terms($cat);
      //$cats .= (strpos($cats, $cat->slug) === false ? $cat->slug." " : "");
    }
  }
  return $catz;
}

function conditional_product_in_cart( $product_id ) {
    //Check to see if user has product in cart
    global $woocommerce;

    $check_in_cart = false;

    foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
        $cats = all_cat_classes($_product);
        foreach($cats as $values){
          // product in cart
          if($values === $product_id){
            $check_in_cart = true;
          }
        }
    }
    return $check_in_cart;
}

add_action('woocommerce_after_order_notes', 'conditional_checkout_field');

function conditional_checkout_field( $checkout ) {
echo '<div id="conditional_checkout_field">';

$check_in_cart = conditional_product_in_cart('FND'); //replace xxxx with the product id

  // Check if the product is in the cart and show the custom fields if it is
  if ($check_in_cart === true ) {

    woocommerce_form_field( 'custom_field', array(
    'type'          => 'text',
    'class'         => array('my-field-class form-row-wide'),
    'label'         => __('Friday Night Dinner Seating'),
    'placeholder'   => __('Name and number of people in party'),
    ), $checkout->get_value( 'custom_field' ));
  }
}
/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['custom_field'] ) ) {
        update_post_meta( $order_id, 'Name and Party Size', sanitize_text_field( $_POST['custom_field'] ) );
    }
}
/**
 * Add the field to order emails
 **/
add_filter('woocommerce_email_order_meta_keys', 'my_custom_checkout_field_order_meta_keys');

function my_custom_checkout_field_order_meta_keys( $keys ) {
    $keys[] = 'Name and Party Size';
    return $keys;
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




// Simple products
add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );
function jk_woocommerce_quantity_input_args( $args, $product ) {
    $args['input_value'] 	= 1;	// Starting value
    return $args;
}





// CONCEIVABLY SOLVING CAREER MANAGER PERMISSIONS ISSUE
class JPB_User_Caps {
  
  // Add our filters
  function JPB_User_Caps(){
    add_filter( 'editable_roles', array(&$this, 'editable_roles'));
    add_filter( 'map_meta_cap', array(&$this, 'map_meta_cap'),1,4);
  }
  // Remove 'Administrator' from the list of roles if the current user is not an admin
  function editable_roles( $roles ){
    global $blog_id;
    
    if( isset( $roles['administrator'] ) && !current_user_can('administrator') ){
      unset( $roles['administrator']);
    }
    
    return $roles;
  }
  // If someone is trying to edit or delete an admin and that user isn't an admin, don't allow it
  function map_meta_cap( $caps, $cap, $user_id, $args ){
    switch( $cap ){
        case 'edit_user':
        
        case 'remove_user':
           if( !isset($args[0]) )
                break;
            $other = new WP_User( absint($args[0]) );
            if( $other->has_cap( 'administrator' ) ){
                if(!current_user_can('administrator')){
                    $caps[] = 'do_not_allow';
                }
            }
            break;
        case 'promote_user':
            if( isset($args[0]) && $args[0] == $user_id )
                break;
            elseif( !isset($args[0]) )
                $caps[] = 'do_not_allow';
            $other = new WP_User( absint($args[0]) );
            if( $other->has_cap( 'administrator' ) ){
                if(!current_user_can('administrator')){
                    $caps[] = 'do_not_allow';
                }
            }
            break;
        case 'delete_user':
        case 'delete_users':
            if( !isset($args[0]) )
                break;
            $other = new WP_User( absint($args[0]) );
            if( $other->has_cap( 'administrator' ) ){
                if(!current_user_can('administrator')){
                    $caps[] = 'do_not_allow';
                }
            }
            break;
        default:
            break;
      }
      return $caps;
    }
}
add_action('admin_init', 'as_cap_edits');
function as_cap_edits(){
  $jpb_user_caps = new JPB_User_Caps();  
}

/*Hack WP Multisite to allow Editors to edit user accounts for their site*/
function edit_perm_check() { //The mac_admin_users_cap function bleow has a flaw that allows edit access to all users if they change the user ID in the URL - this patches that bug
  $screen = get_current_screen(); //get the relevant info for this page

  global $current_user; //user doing the editing
  get_currentuserinfo();

  global $profileuser; //The person whose profile we are accessing
  if($screen->base === 'user-edit' || $screen->base === 'user-edit-network') {    //make sure we care about this page
    if (!is_super_admin($current_user->ID)) { //Skip all of this is the user is super admin.
      //Next, check to see if the user being edited is a member of this blog AND check if the current user is a member of this blog
      if (!(is_user_member_of_blog($profileuser->ID, get_current_blog_id()) && is_user_member_of_blog($current_user->ID, get_current_blog_id()))) {
        wp_die( __( 'You do not have permission to edit this user.' ) );
      } //end permission check
    } //end Super admin check
  }
}
add_filter( 'admin_head', 'edit_perm_check', 1, 4 );

remove_all_filters( 'enable_edit_any_user_configuration' );
add_filter( 'enable_edit_any_user_configuration', '__return_true'); // '__return_true' is a WordPress API function in wp-includes/functions.php

function mc_admin_users_caps( $caps, $cap, $user_id, $args ){
  foreach( $caps as $key => $capability ){
    if( $capability != 'do_not_allow' )
      continue;

    switch( $cap ) {
      case 'edit_user':
      case 'edit_users':                  
        $caps[$key] = 'edit_users';
        break;
      case 'delete_user':
      case 'delete_users':
        $caps[$key] = 'delete_users';
        break;
      case 'create_users':
        $caps[$key] = $cap;
        break;
    }
  }

  return $caps;
}
add_filter( 'map_meta_cap', 'mc_admin_users_caps', 1, 4 );