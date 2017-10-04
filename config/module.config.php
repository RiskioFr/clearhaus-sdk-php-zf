<?php

use Clearhaus\Client;
use Clearhaus\Container\ClientFactory;

return [
    'clearhaus_sdk' => [
        'api_key' => null,
        'mode' => Client::MODE_TEST,
        'use_signature' => true,
        'plugins' => [],
    ],

    'service_manager' => [
        'factories' => [
            Client::class => ClientFactory::class,
        ],
    ],
];
