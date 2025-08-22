<?php

declare(strict_types=1);

namespace Foxsun\Admin\ServiceProviders;

use Foxsun\Admin\Abstracts\AdminContainer;
use Foxsun\Admin\Components\AuthComponent;
use Foxsun\Admin\Components\EditCrudFormComponent;
use Foxsun\Admin\Components\Fields\TextFieldComponent;
use Foxsun\Admin\Components\Widgets\MemoryUsageComponent;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class FoxsunAdminServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Livewire::component('auth-form', AuthComponent::class);
        Livewire::component('memory-usage-widget', MemoryUsageComponent::class);
        Livewire::component('edit-crud-form', EditCrudFormComponent::class);
        $this->registerCrudFields();
    }

    public function register(): void
    {
        $this->registerViewNamespaces();
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/langs', 'foxsun');
        $this->registerBladeErrorDirective();
        $this->registerRouteMacros();
        Paginator::defaultView('foxsun::paginator');
    }

    public function registerRouteMacros(): void
    {
        Route::macro('foxsun', function (string $controller) {
            $registry = app(AdminContainer::class);
            $registry->push($controller);

            return $controller;
        });
    }

    private function registerCrudFields()
    {
        Livewire::component('text-field', TextFieldComponent::class);
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
