<?php

declare(strict_types=1);

namespace Foxsun\Admin\Http\Controllers\Actions;

class EditAction
{
    use Action;

    public function loadEditPage(string $modelName)
    {
        $this->initAction($modelName);

        return view('foxsun::pages.actions.edit', [
            'model' => $this->model,
            'controller' => $this->controller,
        ]);
    }
}
