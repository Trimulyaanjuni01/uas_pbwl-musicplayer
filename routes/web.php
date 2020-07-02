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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artist', 'ArtistController@index')->name('artist.index');
Route::get('/album', 'AlbumController@index');
Route::get('/track', 'TrackController@index');
Route::get('/played', 'PlayedController@index');

Route::get('/artist/create', 'ArtistController@create')->name('artist.create');
Route::post('/artist', 'ArtistController@store');

Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');

Route::get('/played/create', 'PlayedController@create');
Route::post('/played', 'PlayedController@store');

Route::get('/track/create', 'TrackController@create');
Route::post('/track', 'TrackController@store');

Route::delete('artist/{id}', 'ArtistController@destroy');
Route::delete('album/{id}', 'AlbumController@destroy');
Route::delete('track/{id}', 'TrackController@destroy');
Route::delete('played/{id}', 'PlayedController@destroy');

Route::get('album/{id}/edit', 'AlbumController@edit');
Route::patch('album/{id}', 'AlbumController@update');

Route::get('artist/{id}/edit', 'ArtistController@edit');
Route::patch('artist/{id}', 'ArtistController@update');

Route::get('played/{id}/edit', 'PlayedController@edit');
Route::patch('played/{id}', 'PlayedController@update');

Route::get('track/{id}/edit', 'TrackController@edit');
Route::patch('track/{id}', 'TrackController@update');

Route::get('/track/upload', 'TrackController@create');
Route::post('/track', 'TrackController@store');