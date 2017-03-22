<?php

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

Route::group(['prefix' => '', 'namespace'=>'Site'], function()
    {

		Route::get('/', 'LoginController@getIndex');
		Route::post('login', 'LoginController@postProcess');
		Route::get('logout', 'LoginController@getLogout');
		Route::get('member', 'MemberController@getIndex');
		Route::post('sendmail', 'MemberController@postSendmail');
		//Route::controller('login','LoginController');
		//Route::controller('index', 'IndexController');


});