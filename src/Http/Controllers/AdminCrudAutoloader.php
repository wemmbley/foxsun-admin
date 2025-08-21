<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers;

use Foxsun\Admin\Http\Controllers\Actions\ListAction;

class AdminCrudAutoloader
{
    public function __construct(
        private ListAction $listAction,
    )
    {
    }

    public function load(string $modelName, string $action)
    {
        switch($action) {
            case 'list': {
                return $this->listAction->loadTable($modelName);
            }
            default: {
                return redirect ('/admin');
            }
        }
    }
}
