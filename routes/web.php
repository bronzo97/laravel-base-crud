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
    return view('index');
});

Route::get("/", "ComicController@index")->name("comics.index");
Route::get("/comics/show/{comic}", "ComicController@show")->name("comics.show");
Route::get("/comics/create", "ComicController@create")->name("comics.create");
Route::get("/comics/show/{comic}/edit", "ComicController@edit")->name("comics.edit");

Route::post("/comics", "ComicController@store")->name("comics.store");
Route::patch("/comics/show/{comic}", "ComicController@update")->name("comics.update");
