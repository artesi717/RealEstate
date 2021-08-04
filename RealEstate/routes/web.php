<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;


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

Route::get('/','HomeController@index');


Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/propertypage/{post}','PostsController@show');
Route::get('/propertypage/{post}/edit','PostsController@edit');
Route::patch('/propertypage/{post}','PostsController@update');
Route::get('/allposts','PostsController@view');

Route::get('/profile/{user}','ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');



Route::get('/admindashboard','AdminController@view');

Auth::routes();



