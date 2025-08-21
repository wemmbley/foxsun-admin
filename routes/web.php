<?php

use Foxsun\Admin\Http\Middlewares\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/admin/auth', function() {
    return view('foxsun::pages.auth');
});

Route::prefix('/admin')->middleware(AdminMiddleware::class)->group(function() {
    Route::get('/', function() {
        return view('foxsun::pages.dashboard');
    });

    Route::foxsun(\Foxsun\Admin\Http\Controllers\UserAdminController::class);

    Route::get('/{modelName}/{action}', [\Foxsun\Admin\Http\Controllers\AdminCrudAutoloader::class, 'load']);
});
