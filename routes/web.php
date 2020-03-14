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
Route::get('/product','ProductController@insert_product')->name('product');

Route::post('/create','ProductController@create')->name('product_create');

Route::get('/list','ProductController@pro_list')->name('list');

Route::get('/delete/{id}','ProductController@pro_delete')->name('product_delete');

Route::get('/edit/{id}','ProductController@pro_edit')->name('product_edit');

Route::post('/update','ProductController@pro_update')->name('product_update');

Route::get('/catagory','CatagoryController@pro_catagory')->name('product_catagory');

Route::post('/addcreate','CatagoryController@pro_addcatagory')->name('product_add');

Route::get('/', function () {
    return view('welcome'); 
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
