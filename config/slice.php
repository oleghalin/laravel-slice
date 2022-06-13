<?php

return [
    'enabled' => env('SLICE_ENABLED', true),

    'router' => [
        'prefix' => env('SLICE_PREFIX', 'slice'),
        'domain' => env('SLICE_DOMAIN', null),
        'middleware' => ['http-slice']
    ]
];
