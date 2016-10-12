module.exports = {
    facebook: {
        url  : 'http://graph.facebook.com/',
        parse: function( res ) {
            var data = JSON.parse( res ).share;
            return data ? data.comment_count + data.share_count : 0;
        }
    },

    linkedin: {
        url  : 'https://www.linkedin.com/countserv/count/share?format=json&url=',
        parse: function( res ) {
            return JSON.parse( res ).count / 1;
        }
    },

    odnoklassniki: {
        url  : 'http://www.odnoklassniki.ru/dk?st.cmd=extLike&uid=odklcnt0&ref=',
        parse: function( res ) {
            return res.match( /^ODKL\.updateCount\(\'odklcnt0\',\'(\d+)\'\);$/ )[ 1 ] / 1;
        }
    },

    pinterest: {
        url : 'http://api.pinterest.com/v1/urls/count.json?url=',
        parse: function( res ) {
            return JSON.parse(res.match(/receiveCount\((.*?)\)$/)[1]).count / 1;
        }
    },

    vk: {
        url  : 'http://vk.com/share.php?act=count&url=',
        parse: function( res ) {
            return res.match( /^VK\.Share\.count\(\d, (\d+)\);$/ )[ 1 ] / 1;
        }
    }
}
