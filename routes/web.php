<?php

use Foxsun\Admin\Http\Middlewares\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/admin/auth', function() {
    return view('foxadmin::pages.auth');
});

Route::prefix('/admin')
    ->middleware(AdminMiddleware::class)
    ->group(function() {

        Route::get('/', function() {
            dd(\Illuminate\Support\Facades\Auth::user());
        });

});
