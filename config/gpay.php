<?php

return [
    

    /*
    |--------------------------------------------------------------------------
    | API data
    |--------------------------------------------------------------------------
    |
    | Copy the keys and place their values in your .env file
    | You can get it from https://app.gpay.cl/usuarios/tokenintegracion
    |
    */

    'base_url' => env('GPAY_BASE_URL'),
    'public_token' => env('GPAY_PUBLIC_TOKEN'),
    'private_token' => env('GPAY_PRIVATE_TOKEN'),

    
    /*
    |--------------------------------------------------------------------------
    | Routes
    |--------------------------------------------------------------------------
    |
    | You can change the "prefix" from the URL route, by default is: "GPAY"
    | So, the full "url" will be: https://yourdomain.com/GPAY
    |
    |
    */

    'route_prefix' => 'GPAY',


    /*
    |--------------------------------------------------------------------------
    | Finished Route name
    |--------------------------------------------------------------------------
    |
    | You can set a custom name for showing the final result of transaction
    |
    |
    */

    'route_finish_name' => env('gpay_ROUTE_FINISH_NAME', 'gpay.result'),

];
