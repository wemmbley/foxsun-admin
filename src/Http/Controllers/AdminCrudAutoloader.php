<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers;

use Foxsun\Admin\Http\Controllers\Actions\EditAction;
use Foxsun\Admin\Http\Controllers\Actions\ListAction;

class AdminCrudAutoloader
{
    public function __construct(
        private ListAction $listAction,
        private EditAction $editAction,
    )
    {
    }

    public function load(string $modelName, string $action, int $id = null)
    {
        switch($action) {
            case 'list': {
                return $this->listAction->loadTable($modelName);
            }
            case 'edit': {
                return $this->editAction->loadEditPage($modelName);
            }
            default: {
                if(app()->hasDebugModeEnabled()) {
                    throw new \Exception('404. Not found.');
                }

                return redirect ('/admin');
            }
        }
    }
}
