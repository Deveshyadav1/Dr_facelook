<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\DoctorController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/home',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);


Route::get('/appointment',[DoctorController::class,'appointment']);
Route::get('/appointment_status',[DoctorController::class,'appointment_status']);
Route::get('/appointment_type',[DoctorController::class,'appointment_type']);

/*Route::get('/create-appointment',[DoctorController::class,'create_appointment']);

Route::post('/create-appointment', 'DoctorController@create_appointment')->name('create.appointment');*/

Route::post('/create-appointment', [DoctorController::class,'create_appointment'])->name('create.appointment');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
