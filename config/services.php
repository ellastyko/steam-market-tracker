<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain'   => env('MAILGUN_DOMAIN'),
        'secret'   => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme'   => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    /**
     * Steam
     */
    'steam' => [
        'client_id'     => '49C8C76B9A02E9E9B0B3D2844C4FA2DE',
        'client_secret' => env('STEAM_CLIENT_SECRET', '49C8C76B9A02E9E9B0B3D2844C4FA2DE'),
        'redirect'      => env('STEAM_REDIRECT_URI', env('APP_URL').'auth/steam/callback'),
        'allowed_hosts' => [
            'localhost',
        ]
    ],
];
