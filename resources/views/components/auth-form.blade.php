<div>
    <form wire:submit="submit" autocomplete="off" novalidate="">
        @csrf
        <div class="mb-3">
            <label class="form-label">{{ __('foxsun::auth.email') }}</label>
            <input type="email" class="form-control" wire:model="email" placeholder="your@email.com"
                   autocomplete="off" name="email" id="email">
            @formError('email')
        </div>
        <div class="mb-2">
            <label class="form-label">
                {{ __('foxsun::auth.password') }}
                <span class="form-label-description"></span>
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" wire:model="password" id="password"
                       placeholder="{{ __('foxsun::auth.password_hint') }}" autocomplete="off">
            </div>
            @formError('password')
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">{{ __('foxsun::auth.sign_in') }}</button>
        </div>
    </form>
</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', (event) => {
            @this.on('invalid-credentials', (data) => {
                let attempts = data[0].attempts;
                let text = `Вы ввели некорректные данные!\nПопыток осталось: ` + attempts;
                swal("Ошибка", text, "error");
            });

            @this.on('attempts-reached', (data) => {
                let text = 'Попыток не осталось, вы заблокированы. \nПовторите попытку через 15 минут.';
                swal("Блокировка", text, "error");
            });
        });
    </script>
@endpush
