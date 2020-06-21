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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','WelcomeController@index');
Route::get('about','WelcomeController@about');

Route::resource('issues','IssueController');

Route::resource('comments','CommentsController', ['only' => 'store']);
/* 
Route::get('issues','IssueController@index')->name('issues.index');
Route::get('issues/create','IssueController@create')->name('issues.create');
Route::post('issues','IssueController@store')->name('issues.store');
Route::get('issues/{issue}/edit','IssueController@edit')->name('issues.edit');
Route::put('issues/{issue}','IssueController@update')->name('issues.update');

Route::get('issues/{issue}','IssueController@show')->name('issues.show');
Route::delete('issues/{issue}','IssueController@destroy')->name('issues.destroy');
 */