<?php

function get_counter_number__vk( $url ) {
    $CHECK_URL_PREFIX = 'http://vk.com/share.php?act=count&url=';

    $check_url = $CHECK_URL_PREFIX . $url;

    $data   = file_get_contents( $check_url );
    $shares = array();

    preg_match( '/^VK\.Share\.count\(\d, (\d+)\);$/i', $data, $shares );

    return (int)$shares[ 1 ];
}