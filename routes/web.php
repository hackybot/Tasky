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

//ADD LIST ROUTES

Route::get('/', "ToDoController@ToDoList");


//=========================================

//ADD, ADD ROUTES
Route::get("/add", function(){

  return view('ToDos/add');

});

Route::post("/add", "ToDoController@addPost");

//==========================================

//ADD EDIT ROUTES

Route::get("/{id}/edit", "ToDoController@edit" );

Route::post("/{id}/edit", "ToDoController@editPost");


//===========================================


//
