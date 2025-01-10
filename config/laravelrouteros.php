<?php

return [
    'providers' => [
        'RouterOS\Laravel\ServiceProvider'
    ],
    'laravelrouteros' => [
        'host' => env('ROUTEROS_HOST', '127.0.0.1'),
        'user' => env('ROUTEROS_USER', 'admin'),
        'pass' => env('ROUTEROS_PASS', 'admin'),
        'port' => env('ROUTEROS_PORT', 8728),
    ]
];