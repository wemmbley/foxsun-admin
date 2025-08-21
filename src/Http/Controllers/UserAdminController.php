<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers;

use App\Models\User;
use Foxsun\Admin\Abstracts\AdminController;

class UserAdminController extends AdminController
{
    public string $model = User::class;

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
}
