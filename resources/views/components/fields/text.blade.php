<div class="{{ $classes }}">
    <label class="form-label">{{ $label }}</label>
    <input type="text" class="form-control" name="{{ $name }}" placeholder="{{ $placeholder }}">
    @formError('{{$name}}')
</div>
