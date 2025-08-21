<?php

return [
    'auth' => [
        'auth_url' => '/admin',
        'auth_tries' => 3,
        'auth_block_mins' => 15,
    ],
    'themes' => [
        'themes_path' => __DIR__.'../resources/views/themes',
        'is_themes_active' => true,
    ],
    'mediafiles' => [
        'mediafiles_path' => storage_path('app/public/admin_uploads'),
        'is_mediafiles_active' => true,
    ],
];
