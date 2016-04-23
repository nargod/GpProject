<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('errors.503');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/notice', 'NoticeController@index');
    Route::get('/진료내역', '진료내역Controller@index');
    Route::get('/고객list', '고객listController@index');
    Route::get('/상담내역', '상담내역Controller@index');
    Route::get('/후기조회', '후기조회Controller@index');
    Route::get('/예약스케쥴', '예약스케쥴Controller@index');
    //Route::resource('/customer', 'CustomersController');
    Route::resource('files', 'AttachmentsController', ['only' => ['store', 'destroy']]);
});
