<?php

// www matters
function get_counter_number__twitter( $url ) {
    $CHECK_URL_PREFIX = 'http://urls.api.twitter.com/1/urls/count.json?url=';

    $check_url = $CHECK_URL_PREFIX . $url;

    $data   = file_get_contents( $check_url );
    $shares = json_decode( $data ) -> count;

    return $shares;
}