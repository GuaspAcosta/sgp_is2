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

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'permission']], function() {
    
    /**
     * User Routes
     */
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'App\Http\Controllers\UserController@index')->name('users.index');
        Route::get('/create', 'App\Http\Controllers\UserController@create')->name('users.create');
        Route::post('/create', 'App\Http\Controllers\UserController@store')->name('users.store');
        Route::get('/{user}/show', 'App\Http\Controllers\UserController@show')->name('users.show');
        Route::get('/{user}/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
        Route::patch('/{user}/update', 'App\Http\Controllers\UserController@update')->name('users.update');
        Route::delete('/{user}/delete', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');
    });

    /**
     * User Routes
     */
    /*  Route::group(['prefix' => 'posts'], function() {
        Route::get('/', 'PostsController@index')->name('posts.index');
        Route::get('/create', 'PostsController@create')->name('posts.create');
        Route::post('/create', 'PostsController@store')->name('posts.store');
        Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
        Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
        Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
        Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
    });*/

    Route::resource('roles', App\Http\Controllers\RolesController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionsController::class);
});


