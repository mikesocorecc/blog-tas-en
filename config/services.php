<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Servicios de terceros
    |--------------------------------------------------------------------------
    |
    | Este archivo es para almacenar las credenciales para servicios de terceros como tales
    | como Mailgun, Manualma, AWS y más.Este archivo proporciona el de facto
    | Ubicación para este tipo de información, lo que permite que los paquetes tengan
    | Un archivo convencional para ubicar las diversas credenciales de servicio.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    // CLAVE API 0ce4991b37fa08b38cb266e00c03b5ac
    // Clave secreta 417c32a2e2197745c1dbb17b25ee1cfa
];
