<?php

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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@welcome');
Route::get('/recipes', 'HomeController@recipes');
Route::get('/detail-recipe/{id}', 'HomeController@detail_recipe');
Route::post('/search', 'HomeController@search');

Route::get('/profile', 'DashboardController@profile');
Route::post('/edit-profile', 'UsersController@update');
Route::get('/upload-recipes', 'DashboardController@upload_recipes');
Route::post('/proses-upload-recipe', 'DashboardController@proses_upload_recipe');
Route::post('/proses-comment', 'DashboardController@proses_comment');
Route::post('/proses-like', 'DashboardController@proses_like');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/recipes' ,'DashboardController@lihatrecipes');
Route::get('/dashboard/add-recipes' ,'DashboardController@tambahrecipes');
Route::post('/dashboard/delete-recipe', 'DashboardController@deleterecipe');

Route::get('/home' ,'DashboardController@index');
