<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Entrypoints
    |--------------------------------------------------------------------------
    |
    | Here you may specify which files are your entrypoints for Vite. Each
    | entrypoint will be included on the page using a script or a style tag.
    |
    */

    'entrypoints' => [
        'js/app', // This should match the key in the Vite manifest
    ],

    /*
    |--------------------------------------------------------------------------
    | Development server
    |--------------------------------------------------------------------------
    |
    | If you are running the Vite development server, you may specify the
    | URL here so that assets will be hot-reloaded automatically.
    |
    */

    'dev_server' => env('VITE_DEV_SERVER', 'http://localhost:3000'),

];
