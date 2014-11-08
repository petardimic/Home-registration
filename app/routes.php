<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('login', 'LoginController@showLogin');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@getLogout');

Route::get('register', 'RegisterController@showRegister');
Route::post('register', 'RegisterController@postRegister');

Route::get('profile', 'ProfileController@showProfile');
//Route::post('profile', 'ProfileController@postProfile');

Route::get('homeregis', 'HomeRegisController@showHomeRegis');
Route::post('homeregis', 'HomeRegisController@postHomeRegis');

Route::get('member', 'MemberController@showMember');
Route::post('member', 'MemberController@postMember');

//Route::get('AddOfficer', 'OfficerRegisterController@showRegister');
//Route::post('AddOfficer', 'OfficerRegisterController@postOfficer');

Route::get('petition/{types}','PetitionController@showPetition');
Route::post('petition/{types}','PetitionController@postPetition');

?>