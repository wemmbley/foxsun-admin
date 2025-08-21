<?php

declare(strict_types=1);

namespace Foxsun\Admin\Abstracts;

use Illuminate\Support\Str;

class AdminContainer
{
    private static array $controllers = [];

    public function push(string $controller): void
    {
        $name = preg_replace("/.+\\\(.+)AdminController/", '$1', $controller);
        $name = strtolower($name);
        $name = Str::singular($name);

        self::$controllers[$name] = $controller;
    }

    public function getByName(string $name): string
    {
        return self::$controllers[$name];
    }
}
