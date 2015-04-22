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

// Bind route parameters

Route::model('medicalpractice', 'MedicalPractice');

// Show pages

Route::get('/', 'MedicalPracticesController@index');
Route::get('/create', 'MedicalPracticesController@create');
Route::get('/edit/{medicalpractice}', 'MedicalPracticesController@edit');
Route::get('/delete/{medicalpractice}', 'MedicalPracticesController@delete');

// Handle form submissions

Route::post('/create', 'MedicalPracticesController@handleCreate');
Route::post('/edit', 'MedicalPracticesController@handleEdit');
Route::post('/delete', 'MedicalPracticesController@handleDelete');

