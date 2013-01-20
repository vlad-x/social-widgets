<?php

function get_counter_number__linkedin( $url ) {
    $CHECK_URL_PREFIX = 'http://www.linkedin.com/countserv/count/share?format=json&url=';

    $check_url = $CHECK_URL_PREFIX . $url;

    $data   = file_get_contents( $check_url );
    $shares = json_decode( $data ) -> count;

    return $shares;
}