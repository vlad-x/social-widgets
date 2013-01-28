<?php

function get_counter_number__facebook( $url ) {
    $CHECK_URL_PREFIX = 'https://graph.facebook.com/fql?q=SELECT%20url,%20normalized_url,%20share_count,%20like_count,%20comment_count,%20total_count,commentsbox_count,%20comments_fbid,%20click_count%20FROM%20link_stat%20WHERE%20url=';

    $check_url = $CHECK_URL_PREFIX . '\'' . $url . '\'';

    $data = file_get_contents( $check_url );
    $data = json_decode( $data, true );

    $shares = null;
    if ( isset($data[ 'data' ][ 0 ], $data[ 'data' ][ 0 ][ 'total_count' ] ) ) {
        $shares = $data[ 'data' ][ 0 ][ 'total_count' ];
    };

    $shares === null ? $shares = 0: false;

    return $shares;
}
