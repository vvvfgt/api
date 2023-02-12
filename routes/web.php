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

//Route::get('/{any}', 'SpaController@index')->where('any', '.*');

Route::get('/', \App\Http\Controllers\Shop\Main\IndexController::class)->name('shop.main.index');

Route::group(['prefix' => 'categories'], function() {
    Route::get('/', \App\Http\Controllers\Shop\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Shop\Category\CreateController::class)->name('category,create');
    Route::post('/', \App\Http\Controllers\Shop\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Shop\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Shop\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', \App\Http\Controllers\Shop\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Shop\Category\DeleteController::class)->name('category.delete');
});

