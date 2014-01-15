<?php

function get_counter_number__pinterest( $url ) {
    $CHECK_URL_PREFIX = 'http://api.pinterest.com/v1/urls/count.json?url=';

    $check_url = $CHECK_URL_PREFIX . $url;

    $data   = file_get_contents( $check_url );
    $shares = array();

    preg_match( '/receiveCount\((.*?)\)$/i', $data, $shares );
    $shares = json_decode( $shares[1] ) -> count;

    return (int)$shares;
}
