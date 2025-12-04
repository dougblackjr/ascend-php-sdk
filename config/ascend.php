<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ascend API Key
    |--------------------------------------------------------------------------
    |
    | Your Ascend API key. You can find this in your Ascend dashboard.
    |
    */
    'api_key' => env('ASCEND_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | The Ascend environment to use. Options: 'sandbox' or 'production'
    |
    */
    'environment' => env('ASCEND_ENVIRONMENT', 'sandbox'),

    /*
    |--------------------------------------------------------------------------
    | Request Timeout
    |--------------------------------------------------------------------------
    |
    | The timeout for API requests in seconds.
    |
    */
    'timeout' => env('ASCEND_TIMEOUT', 30),
];
