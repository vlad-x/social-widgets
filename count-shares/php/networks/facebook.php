<?php

function get_counter_number__facebook( $url ) {
    $CHECK_URL_PREFIX = 'http://graph.facebook.com/?id=';

    $check_url = $CHECK_URL_PREFIX . $url;

    $data   = file_get_contents( $check_url );
    $shares = json_decode( $data ) -> shares;

    $shares === null ? $shares = 0: false;

    return $shares;
}
