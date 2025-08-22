<form wire:submit="submit" method="post" id="edit-crud-form">
    @csrf
    <div class="space-y">
        @foreach($this->modelFields as $field)
            @livewire($field['component'], [$field['params']], key($field['component']))
        @endforeach
    </div>
</form>
