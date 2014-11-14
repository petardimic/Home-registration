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

Route::get('currentAddr/{id}/{id_user}/{id_home}', 'CurrentAddrController@showCurrentAddr');
Route::post('currentAddr/{id}/{id_user}/{id_home}', 'CurrentAddrController@postCurrentAddr');

Route::get('homeregis/{id_pet}', 'HomeRegisController@showHomeRegis');
Route::post('homeregis/{id_pet}', 'HomeRegisController@postHomeRegis');

Route::get('member/{id_user}', 'MemberController@showMember');
Route::post('member/{id_user}', 'MemberController@postMember');


Route::get('petition/{types}/{id_user}','PetitionController@showPetition');
Route::post('petition/{types}/{id_user}','PetitionController@postPetition');

Route::get('officer','OfficerController@showOfficer');

Route::get('changeOwner/{types}/{id_user}','ChangeOwnerController@showChange');

Route::get('deleteRecord/{id}','DeleteController@showDelete');
Route::get('deleteRecord/{id}','DeleteController@deletePetition');

?>