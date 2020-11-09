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

Route::get('/api', function () {
    return view('api');
});



Route::get('crawl', "TwitterCrawlerController@crawl");
Route::post('get-data-post', "IndexController@getDataPost");

Route::get("tracking","TrackingController@index");
Route::post("get-post-tracking","TrackingController@getPostTracking");
Route::post("get-tracking","TrackingController@getTracking");
Route::post('update-tracking-from-index','TrackingController@updateTrackingFromIndex');

Route::get('keyword','KeywordController@index');
Route::post('keyword','KeywordController@createKeyword');
Route::put('keyword/{id}','KeywordController@updateKeyword');
Route::get('delete-keyword/{id}','KeywordController@deleteKeyword');