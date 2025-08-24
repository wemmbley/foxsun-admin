<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers;

use App\Models\User;
use Foxsun\Admin\Abstracts\AdminController;

class UserAdminController extends AdminController
{
    public string $model = User::class;
    public bool $isTranslatable = false;
    public bool $isSeoEnabled = false;
    public bool $isAnalyticsEnabled = false;
    public bool $isCacheEnabled = false;
    public bool $isCategoriesEnabled = false;
    public bool $isTaxonomiesEnabled = false;

    public array $fields = [
        'id',
        'name',
        'email',
    ];

    public array $actions = [
        'create',
        'delete',
        'edit',
    ];

    public function index(): array
    {
        return [
            'name' => 'Список пользователей',
            'per_page' => 2,
        ];
    }

    public function edit(): array
    {
        return [
            [
                'node' => 'div',
                'class' => 'col-6',
                'fields' => ['name'],
            ],
            [
                'node' => 'div',
                'class' => 'col-6',
                'fields' => ['email'],
            ],
        ];
    }

    public function editId(): false
    {
        return false;
    }

    public function editName(): array
    {
        return [
            'input' => 'text',
            'rules' => 'required|string',
            'label' => 'Имя пользователя',
            'placeholder' => 'Введите имя пользователя',
        ];
    }

    public function editEmail(): array
    {
        return [
            'label' => 'Email',
            'input' => 'text',
            'rules' => 'required|email',
            'placeholder' => 'Введите email пользователя',
        ];
    }
}
