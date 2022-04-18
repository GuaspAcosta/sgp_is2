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
        Route::group(['prefix' => 'proyecto'], function() {
        Route::get('/', 'App\Http\Controllers\ProyectoController@index')->name('proyecto.index');
        Route::get('/create', 'App\Http\Controllers\ProyectoController@create')->name('proyecto.create');
        Route::post('/create', 'App\Http\Controllers\ProyectoController@store')->name('proyecto.store');
        Route::get('/{proyecto}/show', 'App\Http\Controllers\ProyectoController@show')->name('proyecto.show');
        Route::get('/{proyecto}/edit', 'App\Http\Controllers\ProyectoController@edit')->name('proyecto.edit');
        Route::patch('/{proyecto}/update', 'App\Http\Controllers\ProyectoController@update')->name('proyecto.update');
        Route::delete('/{proyecto}/delete', 'App\Http\Controllers\ProyectoController@destroy')->name('proyecto.destroy');
    });

    Route::resource('roles', App\Http\Controllers\RolesController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionsController::class);
});


