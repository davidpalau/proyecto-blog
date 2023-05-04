<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index')->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/');
})->name('logout');
// No incuyo en la url pa palabra category por ser peor para el seo
Route::get('/{category}', [PostController::class, 'category'])->name('posts.category');
// No incuyo en la url pa palabra tag por ser peor para el seo
Route::get('tag/{tag}',[PostController::class, 'tag']) ->name('posts.tag');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
