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

Route::get('/', function () {
    return redirect()->route('news');
});

Route::group(['prefix' => 'admin', 'name' => 'admin.'], function () {
    Route::resources([
        '/news' => Admin_NewsController::class,
        '/category' => Admin_CategoryController::class,
    ]);
});

Route::get('/news', [NewsController::class, 'index'])
	->name('news');

Route::get('/news/article/{id}', [NewsController::class, 'show'])
	->where('id', '\d+')
	->name('news/article');
