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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function() {
    Route::get('/tweets', 'App\Http\Controllers\TweetController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetController@store');
    Route::get('/explore', 'App\Http\Controllers\ExploreController@index')->name('explore');
    Route::post('/profiles/{user:username}/follow', 'App\Http\Controllers\FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'App\Http\Controllers\ProfilesController@edit');
    Route::patch('/profiles/{user:username}', 'App\Http\Controllers\ProfilesController@update')->middleware('can:update,user');
});

Route::get('/profiles/{user:username}', 'App\Http\Controllers\ProfilesController@show')->name('profiles');

Route::get('/adam', 'App\Http\Controllers\DenemeController@adam');


Auth::routes();