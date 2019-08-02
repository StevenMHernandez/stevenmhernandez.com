<?php

return [
    'mailgun' => [
        'secret' => env('MAILGUN_SECRET', 'key-123'),
        'domain' => env('MAILGUN_DOMAIN', 'mydomain'),
    ],
];

