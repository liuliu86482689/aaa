<?php

return [
    'secret'            => env('NOCAPTCHA_SECRET'),
    'sitekey'           => env('NOCAPTCHA_SITEKEY'),
    'server-get-config' => true,
    'options'           => [
        'timeout' => 30,
    ],
];
