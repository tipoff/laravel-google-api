<?php

return [
    'my-business' => [
        'client-secret' => [
            "web" => [
                "client_id" => env('GOOGLE_MYBUSINESS_CLIENT_ID') ?? env('GOOGLE_CLIENT_ID'),
                "project_id" => env('GOOGLE_MYBUSINESS_PROJECT_ID') ?? env('GOOGLE_PROJECT_ID'),
                "auth_uri" => env('GOOGLE_MYBUSINESS_AUTH_URI', env('GOOGLE_AUTH_URI', 'https://accounts.google.com/o/oauth2/auth')),
                "token_uri" => env('GOOGLE_MYBUSINESS_TOKEN_URI', env('GOOGLE_TOKEN_URI', 'https://oauth2.googleapis.com/token')),
                "auth_provider_x509_cert_url" => env('GOOGLE_MYBUSINESS_CERT_URL', env('GOOGLE_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs')),
                "client_secret" => env('GOOGLE_MYBUSINESS_CLIENT_SECRET') ?? env('GOOGLE_CLIENT_SECRET'),
                "redirect_uris" => explode('|', env('GOOGLE_MYBUSINESS_REDIRECT_URIS') ?? env('GOOGLE_REDIRECT_URIS')),
                "javascript_origins" => explode('|', env('GOOGLE_MYBUSINESS_JAVASCRIPT_ORIGINS') ?? env('GOOGLE_JAVASCRIPT_ORIGINS')),
            ],
        ],
        'access-token-slug' => env('ACCESS_TOKEN_SLUG', 'gmb-token'),
    ],
];
