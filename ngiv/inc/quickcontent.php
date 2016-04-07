<?php

function private_events_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-private-events' );
    return ob_get_clean();
}
add_shortcode( 'private-events', 'private_events_shortcode' );


function association_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-association' );
    return ob_get_clean();
}
add_shortcode( 'association', 'association_shortcode' );

function contact_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-contact' );
    return ob_get_clean();
}
add_shortcode( 'contact', 'contact_shortcode' );


function staff_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-staff' );
    return ob_get_clean();
}
add_shortcode( 'staff', 'staff_shortcode' );


function about_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-about' );
    return ob_get_clean();
}
add_shortcode( 'about', 'about_shortcode' );


function policies_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-policies' );
    return ob_get_clean();
}
add_shortcode( 'policies', 'policies_shortcode' );


function certificate_programs_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-certificate-programs' );
    return ob_get_clean();
}
add_shortcode( 'certificate_programs', 'certificate_programs_shortcode' );


function annemarie_shortcode( $attr ) {
    ob_start();
    get_template_part( 'quick/pg-annemarie' );
    return ob_get_clean();
}
add_shortcode( 'annemarie', 'annemarie_shortcode' );