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
    return view('welcome');
});

//list mahasiswa
// Route::get("/biodata-mahasiswa","BiodataController@index")->name("biodata.index");

// Route::resource("biodata", "BiodataController");


// Route::get("/biodata-mahasiswa/{id}/detail","BiodataController@show")->name("biodata.show");


// Route::get("/biodata-mahasiswa/create","BiodataController@create")->name("biodata.create");


// Route::post("/biodata-mahasiswa", "BiodataController@store")->name("biodata.store");


// Route::get("/biodata-mahasiswa/{id}/edit","BiodataController@edit")->name("biodata.edit");


// Route::post("/biodata-mahasiswa/{id}/update","BiodataController@update")->name("biodata.update");


// Route::get("/biodata-mahasiswa/{id}/delete","BiodataController@destroy")->name("biodata.destroy");

// Route::get("/upload", "UploadController@upload");
// Route::post("/upload/proses", "UploadController@proses_upload");

//list login

//menampilkan halaman login
Route::get("/login", "LoginController@showLoginForm")
    ->name("login");

//melakukan proses login
Route::post("/login", "LoginController@login")->name("login.login");

Route::get("/logout", "LoginController@logout")->name("logout");

Route::resource("biodata", "BiodataController")->middleware("web");

Route::get("/biodata/{biodatum}/delete", "BiodataController@destroy")->name("biodata.destroy");