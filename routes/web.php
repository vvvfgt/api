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

Route::get('/', \App\Http\Controllers\Shop\Main\IndexController::class)->name('shop.main.index');

Route::group(['prefix' => 'categories'], function() {
    Route::get('/', \App\Http\Controllers\Shop\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Shop\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Shop\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Shop\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Shop\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', \App\Http\Controllers\Shop\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Shop\Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'tags'], function() {
    Route::get('/', \App\Http\Controllers\Shop\Tag\IndexController::class)->name('tag.index');
    Route::get('/create', \App\Http\Controllers\Shop\Tag\CreateController::class)->name('tag.create');
    Route::post('/', \App\Http\Controllers\Shop\Tag\StoreController::class)->name('tag.store');
    Route::get('/{tag}/edit', \App\Http\Controllers\Shop\Tag\EditController::class)->name('tag.edit');
    Route::get('/{tag}', \App\Http\Controllers\Shop\Tag\ShowController::class)->name('tag.show');
    Route::patch('/{tag}', \App\Http\Controllers\Shop\Tag\UpdateController::class)->name('tag.update');
    Route::delete('/{tag}', \App\Http\Controllers\Shop\Tag\DeleteController::class)->name('tag.delete');
});

Route::resource('applications', \App\Http\Controllers\Service\ApplicationController::class );
Route::resource('colors', \App\Http\Controllers\Color\ColorController::class);

//Route::get('/{any}', 'SpaController@index')->where('any', '.*');

