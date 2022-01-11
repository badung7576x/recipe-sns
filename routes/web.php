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
    
    Route::get('/developing', 'HomeController@developing')->name('developing');
    
    Route::get('', 'HomeController@index')->name('index');
    Route::get('introduce', 'HomeController@introduce')->name('introduce');
    Route::get('users', 'ProfileController@list')->name('user.list');
    Route::get('recipes', 'RecipeController@index')->name('recipe.index');
    Route::get('recipes/list', 'RecipeController@list')->name('recipe.all');
    Route::get('recipes/search', 'RecipeController@search')->name('recipe.search');
    Route::get('rank/users', 'HomeController@rankUsers')->name('rank.users');
    Route::get('rank/recipes', 'HomeController@rankRecipes')->name('rank.recipes');

    Route::group(['middleware' => 'auth'], function() {
        Route::get('profile', 'ProfileController@index')->name('user.profile');
        Route::get('users/{user}/edit', 'ProfileController@edit')->name('user.edit');
        Route::post('users/{user}/edit', 'ProfileController@update')->name('user.update');
        Route::post('users/{user}/change-banner', 'ProfileController@updateBanner')->name('user.update.banner');
        Route::get('users/{user}/delete-banner', 'ProfileController@deleteBanner')->name('user.delete.banner');
        Route::get('recipes/create', 'RecipeController@create')->name('recipe.create');
        Route::post('recipes/create', 'RecipeController@store')->name('recipe.store');
        Route::get('recipes/{recipe}/edit', 'RecipeController@edit')->name('recipe.edit');
        Route::post('recipes/{recipe}/update', 'RecipeController@update')->name('recipe.update');
        Route::get('recipes/{recipe}/delete', 'RecipeController@delete')->name('recipe.delete');

        Route::post('recipes/{recipe}/comment', 'RecipeController@comment')->name('recipe.comment');
        Route::get('recipes/{recipe}/reaction', 'RecipeController@reaction')->name('recipe.reaction');
    });

    Route::get('recipes/{recipe}', 'RecipeController@show')->name('recipe.show');
    Route::get('users/{user}/recipes', 'RecipeController@index')->name('recipe.list');
});
