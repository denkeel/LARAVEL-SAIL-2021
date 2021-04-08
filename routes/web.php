<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as Admin_NewsController;
use App\Http\Controllers\Admin\CategoryController as Admin_CategoryController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return redirect()->route('news');
});

Route::group(['prefix' => 'admin/news', 'as' => 'admin/news/'], function () {
    Route::get('/', [Admin_NewsController::class, 'index'])->name('index');
    Route::get('/create', [Admin_NewsController::class, 'create'])->name('create');
    Route::post('/', [Admin_NewsController::class, 'store'])->name('store');
    Route::delete('/{id}', [Admin_NewsController::class, 'destroy'])->name('destroy');
    Route::put('/{id}', [Admin_NewsController::class, 'update'])->name('update');
    Route::get('/{id}', [Admin_NewsController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [Admin_NewsController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'admin/category', 'as' => 'admin/category/'], function () {
    Route::get('/', [Admin_CategoryController::class, 'index'])->name('index');
    Route::get('/create', [Admin_CategoryController::class, 'create'])->name('create');
    Route::post('/', [Admin_CategoryController::class, 'store'])->name('store');
    Route::get('/{id}', [Admin_CategoryController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [Admin_CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [Admin_CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [Admin_CategoryController::class, 'destroy'])->name('destroy');
});

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/article/{id}', [NewsController::class, 'show'])
    ->name('news/article');

Route::get('/testdb', function() {
    return (DB::collection('news')->get());
});
