<?php

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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/subjects', 'SubjectController@index');
Route::get('/subject', 'SubjectController@showCreate');
Route::post('/subject', 'SubjectController@create');

Route::post('/usersubjects', 'UserSubjectController@store');
Route::delete('/usersubject', 'UserSubjectController@delete');

Route::get('/subject/{subject_id}/notecards', 'NotecardController@index');

Route::post('/notecard', 'NotecardController@create');
Route::put('/notecard', 'NotecardController@update');
Route::get('/notecard/{subject_id}/create', 'NotecardController@showCreate');
Route::get('/notecard/{id}/edit', 'NotecardController@edit');
Route::get('/notecard/{id}/next', 'NotecardController@next');
Route::get('/notecard/{id}', 'NotecardController@show');
