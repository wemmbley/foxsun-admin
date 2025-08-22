<?php

declare(strict_types=1);

namespace Foxsun\Admin\Components\Fields;

use Livewire\Component;

class TextFieldComponent extends Component
{
    private array $rules = [];
    public string $name = '';
    public string $classes = '';
    public string $label = '';
    public string $placeholder = '';

    public function mount(array $params = [])
    {
        $this->rules[$params['name']] = $params['rules'];
        $this->name = $params['name'];
        $this->classes = $params['classes'];
        $this->label = $params['label'];
        $this->placeholder = $params['placeholder'];
    }

    public function render()
    {
        return view('foxsun::components.fields.text');
    }

    public function submit()
    {
        $this->validate($this->rules);
    }
}
