<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/api', function () {
    return view('api');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

// Route::get('/sentiment', function () {
//     return view('sentiment');
// });

// Route::get('/stopword', function () {
//     return view('stopword');
// });

Route::get('test', "IndexController@index");
// Route::get('/login', function () {
//     return view('login');
// });


Route::get('crawl', "TwitterCrawlerController@crawl");
Route::post('get-data-post', "IndexController@getDataPost");

Route::get("tracking","TrackingController@index");
Route::post("get-post-tracking","TrackingController@getPostTracking");
Route::post("get-tracking","TrackingController@getTracking");
Route::post('update-tracking-from-index','TrackingController@updateTrackingFromIndex');

Route::group(['middleware' => ['is_admin']], function () {
    
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
    
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
    Route::get('delete-sentiment/{id}','SentimentController@delete');
    Route::post('sentiment-upload-sqldump','SentimentController@uploadSqlDump');
    Route::post('sentiment-upload-excel','SentimentController@uploadExcel');
    Route::post('sentiment-upload-xml','SentimentController@uploadXML');

    //stopword
    Route::get('stopword','StopWordController@index');
    Route::post('create-stopword','StopWordController@create');
    Route::put('update-stopword/{id}','StopWordController@update');
    Route::get('delete-stopword/{id}','StopWordController@delete');
    Route::post('stopword-upload-sqldump','StopWordController@uploadSqlDump');
    Route::post('stopword-upload-excel','StopWordController@uploadExcel');
    Route::post('stopword-upload-xml','StopWordController@uploadXML');

    //user
    Route::get('user','UsersController@index');
    Route::post('user','UsersController@create');
    Route::get('delete-user/{id}','UsersController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('forgotpassword','UsersController@update');
