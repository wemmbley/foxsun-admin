<?php

declare(strict_types=1);

return [
    'main_currency' => env('APP_CURRENCY', 'usd'),
    'active_currencies' => [
        'uah',
    ],
    'available_currencies' => [
        [
            'name' => 'Гривна',
            'name_en' => 'hryvnia',
            'code' => 'uah',
            'symbol' => '₴',
            'svg' => '',
        ],
    ],
];
