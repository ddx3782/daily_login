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

Route::get('/' , 'GuestController@showLogin');
Route::get('login' , 'GuestController@showLogin');
Route::get('register' , 'GuestController@showRegister');


Route::post('register/user' , 'GuestController@doRegister');
////USER CONTRROLLER\\\\\\\\\\\\\\\\\
Route::get('home' , 'UserController@showHome');
Route::get('goto_email' , 'UserController@Goto_Email');
Route::get('email/verification/{user_id}' , 'UserController@doEmailVerification');

Route::post('login' , 'UserController@doLogin');

