<?php

declare(strict_types=1);

namespace Foxsun\Admin\ServiceProviders;

use Foxsun\Admin\Components\AuthComponent;
use Foxsun\Admin\Components\Widgets\MemoryUsageComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class FoxsunAdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Livewire::component('auth-form', AuthComponent::class);
        Livewire::component('memory-usage-widget', MemoryUsageComponent::class);
    }

    public function register(): void
    {
        $this->registerViewNamespaces();
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/langs', 'foxsun');
        $this->registerBladeErrorDirective();
    }

    private function registerViewNamespaces(): void
    {
        View::addNamespace('foxsun', __DIR__ . '/../../resources/views');
    }

    private function registerBladeErrorDirective(): void
    {
        Blade::directive('formError', function ($field) {
            return "<?php if(\$errors->has($field)): ?>
                        <div class='text-red mt-1'>
                            <?php echo \$errors->first($field); ?>
                        </div>
                    <?php endif; ?>";
        });
    }
}
