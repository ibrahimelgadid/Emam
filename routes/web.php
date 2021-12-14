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

// Route::group(['namespace'=>'Front','prefix'=>'users',"middleware"=>"auth"],function ()
// {
//     Route::get('show', 'UserController@showName');
//     Route::get('edit', 'UserController@edit');
//     Route::put('update', 'UserController@update');
//     Route::post('insert', 'UserController@insert');

// });
// Route::get('/',function ()
// {
//     return view('front/index');
// });




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
