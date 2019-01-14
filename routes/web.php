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


Route::get('/', 'Form\BookingController@index');
Route::post('/', 'Form\BookingController@store');

Auth::routes(['register' => false]);

//Route::get('/admin', 'Auth\AdminController@index')->name('home');

Route::get('/admin', function() {
    return redirect('admin/list');
});

// List
Route::get('/admin/list', 'Admin\CRUDController@index');

// Detail
Route::get('/admin/detail/{id}', 'Admin\CRUDController@getDetail');

// Add
Route::any('/admin/add', 'Admin\CRUDController@store');

// Edit
Route::get('/admin/edit/{id}', 'Admin\CRUDController@getEdit');
Route::post('/admin/edit/{id}', 'Admin\CRUDController@postEdit')->name('admin.edit');

// Delete
Route::any('/admin/delete/{id}', 'Admin\CRUDController@delete');