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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/assessment', [App\Http\Controllers\AssessmentController::class, 'show']);

Route::get('/record', [App\Http\Controllers\RecordController::class, 'show']);

Route::get('/medicine', [App\Http\Controllers\MedicineController::class, 'show']);

Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'show']);

Route::get('/profile', [App\Http\Controllers\UserController::class, 'show']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('patient', [App\Http\Controllers\PatientController::class, 'index']);
Route::post('store-form', [App\Http\Controllers\PatientController::class, 'store']);

Route::get('newappointment', [App\Http\Controllers\AppointmentController::class, 'index']);
Route::post('save', [App\Http\Controllers\AppointmentController::class, 'store']);

Route::get('profile', '\App\Http\Controllers\UserController@edit')->name('edit');
Route::put('profile', '\App\Http\Controllers\UserController@update')->name('update');

