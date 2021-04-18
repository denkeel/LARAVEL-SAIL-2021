<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as Admin_NewsController;
use App\Http\Controllers\Admin\CategoriesController as Admin_CategoriesController;
use App\Models\User;

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
require __DIR__.'/auth.php';

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('news');
})->name('index');

Route::group(['prefix' => 'admin/news', 'as' => 'admin/news/', 'middleware' => 'auth'], function () {
    Route::get('/', [Admin_NewsController::class, 'index'])->name('index');
    Route::get('/create', [Admin_NewsController::class, 'create'])->name('create');
    Route::post('/', [Admin_NewsController::class, 'store'])->name('store');
    Route::delete('/{article}', [Admin_NewsController::class, 'destroyAjax'])->name('destroy');
    Route::put('/{article}', [Admin_NewsController::class, 'update'])->name('update');
    Route::get('/{article}/edit', [Admin_NewsController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'admin/categories', 'as' => 'admin/categories/', 'middleware' => 'auth'], function () {
    Route::get('/', [Admin_CategoriesController::class, 'index'])->name('index');
    Route::post('/', [Admin_CategoriesController::class, 'store'])->name('store');
    Route::put('/{category}', [Admin_CategoriesController::class, 'updateAjax'])->name('update');
    Route::delete('/{category}', [Admin_CategoriesController::class, 'destroyAjax'])->name('destroy');
});

Route::get('admin', function () {
    return redirect()->route('admin/news/index');
})->name('admin');

Route::get('/news', [NewsController::class, 'index'])
->name('news');

Route::get('/news/article/{id}', [NewsController::class, 'show'])
    ->name('news/article');

Route::get('/test', function() {
    $user = User::create([
        'name' => 'name',
        'email' => 'email',
    ]);
});