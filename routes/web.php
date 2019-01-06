<?php

use App\Cat;

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

Route::any('/', function () {
    return view('welcome');
});

Route::any('/admin/modir', function () {
    return view('category.modir');
});

Route::resource('admin/category/', 'CategoryController');
Route::any('/admin/category/learn','CategoryController@learn');
//Route::any('/admin/category/','CategoryController@foo');
/*
Route::get('/admin/category/create','CategoryController@create');
Route::any('/admin/category/store','CategoryController@store');
Route::get('/admin/category/user','CategoryController@user');


Route::any('/admin/category/userStore','CategoryController@userStore');
Route::any('/admin/category/index','CategoryController@index');
//test


Route::any('/admin/category/edit',function (){
    return view('category.edit');
});*/
Route::get('/admin/category/{id}/edit','CategoryController@edit'); //redirect