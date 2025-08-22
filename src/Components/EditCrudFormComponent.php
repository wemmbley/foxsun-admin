<?php

declare(strict_types=1);

namespace Foxsun\Admin\Components;

use Foxsun\Admin\Abstracts\AdminController;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class EditCrudFormComponent extends Component
{
    private Model $model;
    private AdminController $controller;
    public array $modelFields = [];
    public array $rules = [];

    public function mount(Model $model = null, AdminController $controller = null)
    {
        $this->model = $model;
        $this->controller = $controller;
        $this->modelFields = $this->generateModelFields();
    }

    public function render()
    {
        return view('foxsun::components.edit-crud-form');
    }

    public function generateModelFields(): array
    {
        $modelFields = [];
        $crudEditFields = $this->controller->fields;
        $reflectionController = new \ReflectionObject($this->controller);
        foreach($reflectionController->getMethods() as $reflectionMethod) {
            $controllerFieldName = $reflectionMethod->getName();
            $controllerFieldName = str_replace('edit', '', $controllerFieldName);
            $controllerFieldName = strtolower($controllerFieldName);
            foreach ($crudEditFields as $crudEditField) {
                if($controllerFieldName === $crudEditField) {
                    $fieldData = $this->controller->{$reflectionMethod->getName()}();

                    # If user skip this field, we also skip.
                    if($fieldData === false) {
                        continue;
                    }

                    $modelFields[] = [
                        'component' => $fieldData['input'].'-field',
                        'params' => [
                            'rules' => $fieldData['rules'] ?? [],
                            'classes' => $fieldData['classes'] ?? '',
                            'label' => $fieldData['label'] ?? '',
                            'placeholder' => $fieldData['placeholder'] ?? '',
                            'name' => $crudEditField,
                        ],
                    ];

                    $this->rules[$crudEditField] = $fieldData['rules'];
                }
            }
        }

        return $modelFields;
    }

    public function submit()
    {
        $this->validate($this->rules);
    }
}
