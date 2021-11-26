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

Route::get('/', function () { return view('pages.homepage.index'); })->name('index');
Route::get('/recipe', function () { return view('pages.recipe.index'); })->name('index');
Route::get('/profile', function () { return view('pages.profile.index'); })->name('profile');
Route::get('/login', function () { return view('pages.auth.login'); })->name('login');
Route::get('/signup', function () { return view('pages.auth.signup'); })->name('signup');
Route::get('/users/{id}', function () { return view('pages.user.index'); })->name('user.index');
