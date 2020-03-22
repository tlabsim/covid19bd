<?php

use Illuminate\Support\Facades\Route;
use App\Division;
use App\District;
use App\Hospital;
use App\CovidCase;

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

/* ========================================================================
OPEN APIs
=========================================================================*/

Route::get('/api-open/divisions/', function () {
    return Division::all();
});

Route::get('/api-open/divisions/{id}', function ($id) {
    return Division::where('division_id', $id)->first();
});

Route::get('/api-open/districts', function () {
    return District::all();
});

Route::get('/api-open/districts/{id}', function ($id) {
    return District::where('district_id', $id)->first();
});

Route::get('/api-open/hospitals', function () {
    return Hospital::all();
});

Route::get('/api-open/hospitals/{id}', function ($id) {
    return Hospital::where('hospital_id', $id)->first();
});

Route::get('/api-open/covid-cases', function () {
    return CovidCase::all();
});

Route::get('/api-open/covid-cases/{id}', function ($id) {
    return CovidCase::where('case_id', $id)->first();
});

/* ========================================================================
END OF OPEN APIs
=========================================================================*/

Route::get('/', function () {
    return view('welcome');
});


