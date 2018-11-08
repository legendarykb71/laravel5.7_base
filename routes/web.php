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

	// dd(phpinfo());

    return view('welcome');
});

Route::get('/admin',['uses' => 'Admin\Auth\LoginController@index'])->name('login');
Route::post('/login-submit',['uses' => 'Admin\Auth\LoginController@login'])->name('login.submit');
Route::get('/logout',['uses' => 'Admin\Auth\LoginController@logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => ['sentinel.auth'], 'namespace' => 'Admin'],function() {

	Route::get('/dashboard',['uses' => 'DashboardController@index'])->name('admin.dashboard');

});