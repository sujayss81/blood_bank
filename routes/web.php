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
Route::get('/', function () {
    return view('index');
});

Route::get('/donor_home','donorController@donor_home')->middleware('check_dl_status');

// Route::get('/admin_home', function(){
// 	return view('admin_home');
// });

Route::get('/admin_home',function(){
		return view('admin_home');
})->middleware('check_al_status');
Route::view('/admin_login','admin_login');

// Route::fallback(function(){
// 	echo "<script>alert(\"Oops page not found\");</script>";
// });
Route::post('/admin_auth','adminController@auth');
Route::get('/admin_logout','adminController@logout');
Route::post('/donor_auth','donorController@auth');
Route::get('/donor_logout','donorController@logout');
Route::post('/register','donorController@register');
Route::view('/suc_register','suc_register');