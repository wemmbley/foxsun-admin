<?php

return [
    'main_language' => env('APP_LOCALE'),
    'is_translations_enabled' => true,
    'active_languages' => [
        'russian', 'ukrainian'
    ],
    'available_languages' => [
        [
            'name' => 'English',
            'name_en' => 'english',
            'code' => 'en',
            'svg' => '',
            'locale' => 'en-US,en_US.UTF-8,en_US,en-gb,english',
        ],
        [
            'name' => 'Русский',
            'name_en' => 'russian',
            'code' => 'ru',
            'svg' => '',
        ],
        [
            'name' => 'Украинский',
            'name_en' => 'ukrainian',
            'code' => 'ua',
            'svg' => '',
        ],
    ],
];
