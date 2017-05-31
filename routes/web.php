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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('merchandiseAdmin', 'MerchandiseController@merchandiseAdmin');
Route::get('boardAdmin', 'BoardController@boardAdmin');
// Route::get('/shop/{id}','ShopController@show');


Route::resource('shop','ShopController');
Route::resource('merchandise','MerchandiseController');
Route::resource('board','BoardController');
Route::resource('about','AboutController');

Auth::routes();

// Route::get('/home', 'HomeController@index');
