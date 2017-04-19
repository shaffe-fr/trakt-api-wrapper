<?php

namespace Wubs\Trakt;

use GuzzleHttp\Client;

class TraktHttpClient  {
    const API_SCHEME = 'https';
    const API_URL = 'api.trakt.tv';

    public static function make() {
        return new Client(array(
            'base_uri' => self::API_SCHEME . '://' . self::API_URL
        ));
    }
}