<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'facebook' => [
        'client_id' => '247145303265719',
        'client_secret' => '9834eb5659758535118520783de32a83',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],
    'google' => [
        'client_id' => '301476225687-jcqg2q1tu2d3utrugni1mmllu0uf0dpc.apps.googleusercontent.com',
        'client_secret' => '4oMlPXRgANhVXGVdsZNSDqmA',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
