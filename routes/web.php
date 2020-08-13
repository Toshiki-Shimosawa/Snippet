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

Route::get('/index', function () {
    return view('index');
});

Route::get('/snippets', 'SnippetController@lists')->name('snippets');
Route::post('/snippets', 'SnippetController@search')->name('snippetsSearch');
Route::post('/confirm', 'SnippetController@confirm')->name('confirm');
Route::get('/check', function () {
    return view('check');
});
Route::post('/commit', 'SnippetController@commit')->name('commit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/console', function () {
    if(Auth::check()){
        return view('console');
    }else{
        
        return view('auth/login');
    }
    
});
