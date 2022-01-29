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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




##Drive Controller Route##
//display all files
Route::get("drive","DriveController@index")->name('drive.index');
//go to create page
Route::get("drive/create","DriveController@create")->name('drive.create');
//insert file
Route::post("drive/create","DriveController@store")->name('drive.store');
//go to edit page
Route::get("drive/edit/{id}","DriveController@edit")->name('drive.edit');
//update file
Route::post("drive/edit/{id}","DriveController@update")->name('drive.update');
//show file
Route::get("drive/show/{id}","DriveController@show")->name('drive.show');
//delete file
Route::get("drive/destroy/{id}","DriveController@destroy")->name('drive.destroy');
//download file
Route::get("drive/download/{id}","DriveController@download")->name('drive.download');