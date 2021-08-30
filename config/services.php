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
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'vibernetua' => [
        'endpoint' => env('VIBERNETUA_ENDPOINT', 'https://my2.viber.net.ua/api/v2/viber/dispatch'),
        'token' => env('VIBERNETUA_TOKEN'),
        'sender' => env('VIBERNETUA_SENDER'),
        'debug' => env('VIBERNETUA_DEBUG'),
        'sandboxMode' => env('VIBERNETUA_SANDBOX_MODE', false),
    ],
];
