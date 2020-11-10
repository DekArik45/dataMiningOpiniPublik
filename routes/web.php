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

//keyword
Route::get('keyword','KeywordController@index');
Route::post('keyword','KeywordController@createKeyword');
Route::put('keyword/{id}','KeywordController@updateKeyword');
Route::get('delete-keyword/{id}','KeywordController@deleteKeyword');
Route::post('keyword-upload-sqldump','KeywordController@uploadSqlDump');
Route::post('keyword-upload-excel','KeywordController@uploadExcel');
Route::post('keyword-upload-xml','KeywordController@uploadXML');

//sentiment
Route::get('sentiment','SentimentController@index');
Route::post('create-sentiment','SentimentController@create');
Route::put('update-sentiment/{id}','SentimentController@update');
Route::delete('delete-sentiment/{id}','SentimentController@delete');
Route::post('sentiment-upload-sqldump','SentimentController@uploadSqlDump');
Route::post('sentiment-upload-excel','SentimentController@uploadExcel');
Route::post('sentiment-upload-xml','SentimentController@uploadXML');

//stopword
Route::get('stopword','StopWordController@index');
Route::post('create-stopword','StopWordController@create');
Route::put('update-stopword/{id}','StopWordController@update');
Route::delete('delete-stopword/{id}','StopWordController@delete');
Route::post('stopword-upload-sqldump','StopWordController@uploadSqlDump');
Route::post('stopword-upload-excel','StopWordController@uploadExcel');
Route::post('stopword-upload-xml','StopWordController@uploadXML');