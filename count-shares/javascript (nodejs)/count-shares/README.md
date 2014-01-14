# count-shares

Returns JSON with a number of shares for a URL.

```
{
    "facebook": 5461703,
    "twitter": 11876867,
    "vk": 2462,
    "odnoklassniki": 547,
    "pinterest": 60,
    "linkedin": 18113
}
```

## Example

```
var countShares = require( 'count-shares' );

countShares.get( 'http://google.com', function( err, result ) {  } );
```

## Methods

### get( url, callback[, networks] )

`url`: {String} full URL. `www.domain.com` and `domain.com` are different websites for Twitter and Odnoklassniki.

`callback( err, result )`: {Function} callback that will get the results and errors (if any)

`networks`: (optional) {Array} or {String} available networks: facebook, twitter, linkedin, odnoklassniki, pinterest, vk (vkontakte). Need more? <a href="https://github.com/clexit/social-widgets">Contribute!</a>
