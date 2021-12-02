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

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers'], function() {
    Route::get('signup', 'RegisterController@index')->name('signup');
    Route::post('signup', 'RegisterController@create')->name('signup-post');
    
    Route::get('login', 'LoginController@index')->name('login');
    Route::post('login', 'LoginController@login')->name('login-post');
    Route::get('logout', 'LoginController@logout')->name('logout');
    
    Route::get('', 'HomeController@index')->name('index');
    Route::get('recipe/{recipe}', 'RecipeController@index')->name('recipe');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('profile', 'ProfileController@index')->name('profile');
        
    });

    Route::get('users/{id}/recipe', function () { return view('pages.recipe.create'); })->name('create-recipe');
});
