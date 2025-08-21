<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers\Actions;

class ListAction
{
    use Action;

    public function loadTable($modelName)
    {
        $this->initAction($modelName);
        $listFields = $this->controller->fields;
        $paginationCount = $this->controller->index()['per_page'];

        return view('foxsun::pages.actions.list', [
            'titles' => $listFields,
            'models' => $this->model->select($listFields)->paginate($paginationCount),
            'tableName' => $this->controller->index()['name'],
            'modelName' => $modelName,
        ]);
    }
}
