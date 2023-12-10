<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GoogleAuthController;

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

Route::get('/patients',[DoctorController::class,'patients']);

Route::get('/appointment_type',[DoctorController::class,'appointment_type']);

Route::post('/submit-appointment', [HomeController::class, 'submit_user_appointment'])->name('submit.appointment');

Route::post('/create-appointment', [DoctorController::class,'create_appointment'])->name('create.appointment');





Route::get('/news', [HomeController::class,'news'])->name('news');

Route::get('/doctors',[DoctorController::class,'doctors'])->name('doctors');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');

Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);
