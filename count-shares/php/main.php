<?php

$networks = isset( $_GET['networks'] ) ? $_GET['networks'] : 'facebook,twitter';
$url      = isset( $_GET['url'] ) ? $_GET['url'] : '';


header( 'Content-type: application/json' );
echo( json_encode( get_numbers($networks, $url) ) );


function get_numbers( $networks, $url ) {
    $LOCATION        = './networks';
    $FUNCTION_PREFIX = 'get_counter_number__';

    $numbers  = Array();
    $networks = explode( ',', $networks );

    for ( $i = 0; $i < count($networks); $i++ ) {
        $network       = $networks[ $i ];
        $include       = $LOCATION . '/' . $network . '.php';
        $function_name = $FUNCTION_PREFIX . $network;

        if ( file_exists($include) ) {
            include( $include );
            $num = $function_name( $url );

            $numbers[ $network ] = $num;
        };
    };

    return $numbers;
};