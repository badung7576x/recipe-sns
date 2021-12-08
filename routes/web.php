<?php

use App\Models\Recipe;
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

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers'], function() {
    Route::get('signup', 'RegisterController@index')->name('signup');
    Route::post('signup', 'RegisterController@create')->name('signup-post');
    
    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@login')->name('login-post');
    Route::get('logout', 'LoginController@logout')->name('logout');
    
    Route::get('', 'HomeController@index')->name('index');
    Route::get('users', 'ProfileController@list')->name('user.list');
    Route::get('recipes', 'RecipeController@index')->name('recipe.index');
    Route::get('recipes/list', 'RecipeController@list')->name('recipe.all');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('profile', 'ProfileController@index')->name('user.profile');
        Route::get('users/{user}/edit', 'ProfileController@edit')->name('user.edit');
        Route::post('users/{user}/edit', 'ProfileController@update')->name('user.update');
        Route::get('recipes/create', 'RecipeController@create')->name('recipe.create');
        Route::post('recipes/create', 'RecipeController@store')->name('recipe.store');
        Route::get('recipes/{recipe}/edit', 'RecipeController@edit')->name('recipe.edit');
        Route::post('recipes/{recipe}/update', 'RecipeController@update')->name('recipe.update');
        Route::get('recipes/{recipe}/delete', 'RecipeController@delete')->name('recipe.delete');
    });

    Route::get('recipes/{recipe}', 'RecipeController@show')->name('recipe.show');
    Route::get('users/{user}/recipes', 'RecipeController@index')->name('recipe.list');
});
