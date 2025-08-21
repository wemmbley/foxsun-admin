<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers\Actions;

use Foxsun\Admin\Abstracts\AdminContainer;
use Illuminate\Support\Str;

class ListAction
{
    public function __construct(
        private AdminContainer $container,
    )
    {}

    public function loadTable($modelName)
    {
        $modelName = Str::singular($modelName);
        $controller = app()->make($this->container->getByName($modelName));
        $model = app()->make($controller->model);

        $listFields = $controller->fields;

        return view('foxsun::pages.actions.list', [
            'models' => $model->select($listFields)->paginate(10)->all(),
        ]);
    }
}
