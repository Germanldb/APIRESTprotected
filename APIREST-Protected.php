<?php


add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not authorized to access the REST API', 401 );
    }
    return $result;
});

remove_action( 'template_redirect', 'rest_output_link_header', 11 );