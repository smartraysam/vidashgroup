<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'Vidash Group'),
        'short_name' => 'Vidash',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
      
        'icons' => [
            '72x72' => [
                'path' => '/images/apple-icon-72x72.png',
                'purpose' => 'any'
            ],
           
            '120x120' => [
                'path' => '/images/apple-icon-120x120.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/apple-icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/apple-icon-152x152.png',
                'purpose' => 'any'
            ],
            '180x180' => [
                'path' => '/images/apple-icon-180x180.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/android-icon-192x192.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/apple-splash-640x1136.jpg',
            '750x1334' => '/images/icons/apple-splash-750x1334.jpg',
            '828x1792' => '/images/icons/apple-splash-828x1792.jpg',
            '1125x2436' => '/images/icons/apple-splash-1125x2436.jpg',
            '1242x2208' => '/images/icons/apple-splash-1242x2208.jpg',
            '1242x2688' => '/images/icons/apple-splash-1242x2688.jpg',
            '1536x2048' => '/images/icons/apple-splash-1536x2048.jpg',
            '1668x2224' => '/images/icons/apple-splash-1668x2224.jpg',
            '1668x2388' => '/images/icons/apple-splash-1668x2388.jpg',
            '2048x2732' => '/images/icons/apple-splash-2048x2732.jpg',
        ],
        'shortcuts' => [
            [
                'name' => 'Vidash',
                'description' => 'We are passionate in creating & Developing Property Values',
                'url' => '/',
                'icons' => [
                    "src" => "/images/apple-icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Vidash',
                'description' => 'We are passionate in creating & Developing Property Values',
                'url' => '/'
            ]
        ],
        'custom' => []
    ]
];