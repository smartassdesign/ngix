<?php

function faculty_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-faculty' );
    return ob_get_clean();
}
add_shortcode( 'faculty', 'faculty_shortcode' );

function staff_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-staff' );
    return ob_get_clean();
}
add_shortcode( 'staff', 'staff_shortcode' );

function alumni_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-alumni' );
    return ob_get_clean();
}
add_shortcode( 'alumni', 'alumni_shortcode' );

function amandacohen_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-amanda-cohen' );
    return ob_get_clean();
}
add_shortcode( 'amanda-cohen', 'amandacohen_shortcode' );

function appintro_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-app-intro' );
    return ob_get_clean();
}
add_shortcode( 'apply-intro', 'appintro_shortcode' );

function appoutro_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-app-outro' );
    return ob_get_clean();
}
add_shortcode( 'apply-outro', 'appoutro_shortcode' );

function about_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-about' );
    return ob_get_clean();
}
add_shortcode( 'about', 'about_shortcode' );

function hire_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-hire' );
    return ob_get_clean();
}
add_shortcode( 'hire', 'hire_shortcode' );

function contact_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-contact' );
    return ob_get_clean();
}
add_shortcode( 'contact', 'contact_shortcode' );

function rcpjobs_shortcode( $attr ) {
ob_start();
get_template_part( 'quick/rcpjobs' );
return ob_get_clean();
}
add_shortcode( 'rcpjobs', 'rcpjobs_shortcode' );


function faq_shortcode( $attr ) {
ob_start();
get_template_part( 'quick/pg-faq' );
return ob_get_clean();
}
add_shortcode( 'faq', 'faq_shortcode' );