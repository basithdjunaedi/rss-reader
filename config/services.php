<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '281651645580884',
        'client_secret' => 'f1b15ade1ff3869c48caae71cbea1281',
        'redirect' => 'http://rss-reader.dev/auth/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '762976989876-pdrf1mded0atbdmn3r9i6jrk79mio7ht.apps.googleusercontent.com',
        'client_secret' => 'r2sBtplljYFWKmYpgeo3SO4O',
        'redirect' => 'http://rss-reader.dev/auth/login/google/callback'
    ],

    'twitter' => [
        'client_id' => 'nmA5ksTbPLiW1NXsqZByDQipi',
        'client_secret' => 'VWg0TX1RX3L3Y8ThmZhhNlbLce6l9rMBCpFnt3PKh9zu1cHGPY',
        'redirect' => 'http://rss-reader.dev/auth/login/twitter/callback'
    ]
];
