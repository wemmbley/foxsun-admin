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

    public function index()
    {

    }
}
