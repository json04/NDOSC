<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index');
	Route::get('/create', 'HomeController@create');
	Route::post('/create', 'HomeController@store');
	Route::get('/print/{id}', 'PrintController@index');
	Route::post('/xray/{id}', 'PrintController@xray');
	Route::post('/ultrasound/{id}', 'PrintController@ultrasound');
	Route::post('/laboratory/{id}', 'PrintController@laboratory');
	Route::post('/mri/{id}', 'PrintController@mri');
	Route::post('/ct/{id}', 'PrintController@ct');
	Route::post('/prescription', 'PrintController@prescription');
	Route::get('/referralview/{id}', 'PrintController@referralview');
	Route::post('/referralPrint/{id}', 'PrintController@referralPrint');
	Route::get('/admissionView/{id}', 'PrintController@admissionView');
	Route::post('/admissionPrint/{id}', 'PrintController@admissionPrint');
	Route::get('/medcertview/{id}', 'PrintController@medcertview');
	Route::post('/relaxant/{id}', 'PrintController@relaxant');
	Route::post('/antimicrobials/{id}', 'PrintController@antimicrobial');
	Route::post('/miscsupplement/{id}', 'PrintController@miscsupplement');
	Route::post('/injectables/{id}', 'PrintController@injectable');
	Route::post('/dressing/{id}', 'PrintController@dressing');
	Route::post('/castingmaterials/{id}', 'PrintController@castingMaterials');
	Route::post('/orthopedicsprotheses/{id}', 'PrintController@orthopedicsProstheses');
	Route::post('/medcertprint/{id}', 'PrintController@medcertPrint');
});

Route::group(['middleware' => 'admin'], function(){
	Route::get('/proceed/{id}', 'DoctorController@create');
	Route::post('/proceed/{id}', 'DoctorController@store');
	Route::get('/update/{id}', 'DoctorController@PatientUpdate');
	// Route::post('/update/{id}', 'DoctorController@update');
	Route::get('/patientupdate/{id}', 'DoctorController@update');
	Route::post('/patientupdate/{id}', 'DoctorController@updateStore');
});

