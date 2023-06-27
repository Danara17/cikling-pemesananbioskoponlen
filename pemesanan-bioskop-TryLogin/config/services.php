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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'tmdb' => [
        'base_uri' => 'https://api.themoviedb.org/3/',
        'token' => 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI4ZTRmNTMxMWJiZDNjZTMxZTk1NDI4NmZhZWM2NWRjMCIsInN1YiI6IjY0NzZmZjg2MjU1ZGJhMDBlNzRiOTE1NSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.KhGsRvgcnNWe_UikWO7MFt5tBJKO3ldLb2o0AAcgbcs',
    ],
];