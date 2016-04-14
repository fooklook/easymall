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
    return view('welcome');
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
    // 引导用户到新浪微博的登录授权页面
    Route::get('auth/weibo', 'Auth\AuthController@weibo');
    // 用户授权后新浪微博回调的页面
    Route::get('auth/callback', 'Auth\AuthController@callback');



});

Route::any('wechat', 'WechatController@index');
Route::get('menu', 'WechatController@menu');
Route::get('share', 'WechatController@share');
Route::get('wechat/start','WechatController@start');
Route::any('wechat/callback','WechatController@callback');


