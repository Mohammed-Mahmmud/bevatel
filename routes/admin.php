<?php

use App\Http\Controllers\BlogsImportExportController;
use App\Http\Controllers\Dashboard\BlogsController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Profile\PermissionController;
use App\Http\Controllers\Dashboard\Profile\RoleController;
use App\Http\Controllers\Dashboard\Profile\UserController;
use Illuminate\Support\Facades\Route;






/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
 */

Route::group(
    [
        'prefix' => env("PANEL"),
    ],
    function () {

        require __DIR__ . '/auth.php';
        Route::redirect("register", "login"); //Dashboard Routes
        Route::middleware('auth')->group(function () {

            Route::resource('/', DashboardController::class)->names('mainDashboard');
            //   users
            Route::resource('Users', UserController::class)->names('users');

            //            role-permission
            Route::resource('roles', RoleController::class)->names('dashboard.roles');
            Route::resource('permissions', PermissionController::class)->names('dashboard.permissions');

            // Blog Posts
            Route::resource('blog-posts', BlogsController::class)->names('blogs');

            // blogs import
            Route::post('/blogs-import', [BlogsImportExportController::class, 'import'])->name('blogs.import');

            //blogs export
            Route::get('/blogs-export', [BlogsImportExportController::class, 'export'])->name('blogs.export');
        });
    }
);
