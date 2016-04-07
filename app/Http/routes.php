<?php

use App\Note;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('notes','NotesController@index');


route::post('notes','NotesController@store');


route::get ('notes/create','NotesController@create');


route::get('notes/{note}','NotesController@show')->where('note','[0-9]+');
route::get('notes/objectnote','NotesController@images');
route::get('notes/nosotros','NotesController@nosotros');