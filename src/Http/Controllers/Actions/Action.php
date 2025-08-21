<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers\Actions;

use Foxsun\Admin\Abstracts\AdminContainer;
use Illuminate\Support\Str;

trait Action
{
    private $controller;
    private $model;

    public function __construct(
        private AdminContainer $container,
    ) {}

    public function initAction(string $modelName): void
    {
        $modelNameSingular = Str::singular($modelName);
        $this->controller = app()->make($this->container->getByName($modelNameSingular));
        $this->model = app()->make($this->controller->model);
    }
}
