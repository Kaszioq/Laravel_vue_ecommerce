<?php

use Laravel\Sanctum\Sanctum;

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Stateful Domains
//     |--------------------------------------------------------------------------
//     |
//     | Requests from the following domains / hosts will receive stateful API
//     | authentication cookies. Typically, these should include your local
//     | and production domains which access your API via a frontend SPA.
//     |
//     */

//     'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
//         '%s%s',
//         'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
//         Sanctum::currentApplicationUrlWithPort()
//     ))),

//     /*
//     |--------------------------------------------------------------------------
//     | Sanctum Guards
//     |--------------------------------------------------------------------------
//     |
//     | This array contains the authentication guards that will be checked when
//     | Sanctum is trying to authenticate a request. If none of these guards
//     | are able to authenticate the request, Sanctum will use the bearer
//     | token that's present on an incoming request for authentication.
//     |
//     */

//     'guard' => ['web'],

//     /*
//     |--------------------------------------------------------------------------
//     | Expiration Minutes
//     |--------------------------------------------------------------------------
//     |
//     | This value controls the number of minutes until an issued token will be
//     | considered expired. This will override any values set in the token's
//     | "expires_at" attribute, but first-party sessions are not affected.
//     |
//     */

//     'expiration' => null,

//     /*
//     |--------------------------------------------------------------------------
//     | Token Prefix
//     |--------------------------------------------------------------------------
//     |
//     | Sanctum can prefix new tokens in order to take advantage of numerous
//     | security scanning initiatives maintained by open source platforms
//     | that notify developers if they commit tokens into repositories.
//     |
//     | See: https://docs.github.com/en/code-security/secret-scanning/about-secret-scanning
//     |
//     */

//     'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),

//     /*
//     |--------------------------------------------------------------------------
//     | Sanctum Middleware
//     |--------------------------------------------------------------------------
//     |
//     | When authenticating your first-party SPA with Sanctum you may need to
//     | customize some of the middleware Sanctum uses while processing the
//     | request. You may change the middleware listed below as required.
//     |
//     */

//     'middleware' => [
//         'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
//         'encrypt_cookies' => Illuminate\Cookie\Middleware\EncryptCookies::class,
//         'validate_csrf_token' => Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
//     ],

// ];
return [
    /*
    |--------------------------------------------------------------------------
    | Stateful Domains
    |--------------------------------------------------------------------------
    |
    | All of the request origins that should be treated as stateful, meaning
    | the CSRF token cookie will be set on these domains and available for
    | your JavaScript application.
    |
    */
    'stateful' => explode(',', env(
        'SANCTUM_STATEFUL_DOMAINS', 'localhost,localhost:3000,localhost:8080,127.0.0.1,127.0.0.1:8000,::1'
    )),

    /*
    |--------------------------------------------------------------------------
    | Expiration Minutes
    |--------------------------------------------------------------------------
    |
    | This value controls the number of minutes until an issued token will be
    | considered expired. If this value is null, personal access tokens do
    | not expire. This won't affect the "refresh" token expirations.
    |
    */
    'expiration' => null,

    /*
    |--------------------------------------------------------------------------
    | Sanctum Guards
    |--------------------------------------------------------------------------
    |
    | Here you may define the authentication guards that should be used to
    | authenticate Sanctum token requests. The first guard listed will be
    | considered the default application "guard".
    |
    */
    'guards' => [
        'web',
        'sanctum',
    ],

    /*
    |--------------------------------------------------------------------------
    | Sanctum Hash Driver
    |--------------------------------------------------------------------------
    |
    | This configuration options determines the hash driver that will be used
    | to hash the tokens. This will be used to verify the tokens against
    | the database, etc. You may modify this default driver as needed.
    |
    */
    'hash_driver' => 'sha256',
];

