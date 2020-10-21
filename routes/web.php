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
    return view('index');
});

Route::get('tracking', function () {
    return view('tracking');
});

Route::get('api', function () {
    return view('api');
});

Route::get('keyword', function () {
    return view('keyword');
});

Route::get("testing","TestController@index");

Route::get('crawl', "TwitterCrawlerController@crawl");