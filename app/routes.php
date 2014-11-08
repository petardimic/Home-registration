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

Route::get('homeregis/{id_incre_pet}', 'HomeRegisController@showHomeRegis');
Route::post('homeregis/{id_incre_pet}', 'HomeRegisController@postHomeRegis');

Route::get('member', 'MemberController@showMember');
Route::post('member', 'MemberController@postMember');


Route::get('petition/{types}','PetitionController@showPetition');
Route::post('petition/{types}','PetitionController@postPetition');

Route::get('officer','OfficerController@showOfficer');


?>