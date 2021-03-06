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


Auth::routes();

Route::get("/search", "PagesController@search")->name("search")->middleware("auth");

Route::get("/", "PagesController@index")->middleware("auth");

Route::get("/dashboard", "HomeController@index")->middleware("auth");

Route::resource("/posts", "PostsController")->middleware("auth");

Route::resource("/comments", "CommentsController")->middleware("auth");

Route::resource("/user", "ProfilesController")->middleware("auth");


