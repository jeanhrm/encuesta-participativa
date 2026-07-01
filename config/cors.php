<?php

return [
    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
    'https://jeanhrm.github.io',
    'https://jeanhrm.github.io/consultaunicef',
    'https://jeanhrm.github.io/consultaunicef/',
],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];