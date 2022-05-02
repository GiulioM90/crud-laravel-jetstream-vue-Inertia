<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PublicController::class, 'showDashboard'])->name('dashboard');
    Route::get('/users', [PublicController::class, 'showUsers'])->name('users.index');
    Route::get('/posts', [PublicController::class, 'showPosts'])->name('posts.index');
    Route::get('/post-create', [PublicController::class, 'createPost'])->name('posts.create');
    Route::post('/post-submit', [PublicController::class, 'storePost'])->name('post.store');
    Route::get('/post-edit/{post}', [PublicController::class, 'showEditPost'])->name('posts.edit');
    Route::put('/post/{post}', [PublicController::class, 'updatePost'])->name('post.update');
    Route::delete('/post-delete/{post}', [PublicController::class, 'destroyPost'])->name('post.destroy');
});
