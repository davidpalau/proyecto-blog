<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Category;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('categories', CategoryController::class)->names('admin.categories');

use App\Http\Controllers\Admin\RoleController;
Route::resource('roles', RoleController::class)->names('admin.roles');

//  Rutas necesarias para realizar un crud de aminstración categorias

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class)
        ->except(['destroy'])
        ->names([
            'index' => 'categories.index',
            'create' => 'categories.create',
            'store' => 'categories.store',
            'show' => 'categories.show',
            'edit' => 'categories.edit',
            'update' => 'categories.update',
        ]);

    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::resource('users', UserController::class)->names('admin.users');

Route::prefix('admin')->name('admin.')->group(function () {
    // Rutas de categorías que ya hemos definido antes

    Route::resource('tags', TagController::class)
        ->except(['destroy'])
        ->names([
            'index' => 'tags.index',
            'create' => 'tags.create',
            'store' => 'tags.store',
            'show' => 'tags.show',
            'edit' => 'tags.edit',
            'update' => 'tags.update',
        ]);

    Route::delete('tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
});

Route::resource('admin/posts', PostController::class)->names('admin.posts');
