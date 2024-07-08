<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
Route::middleware([
    'auth:sanctum',
    'verified',
])->get('/dashboard', function () {
        return view('dashboard');
})->name('dashboard');

Route::get('/add_doctor_view',[AdminContoller::class,'addview']);
Route::post('/upload_doctor',[AdminContoller::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/show_appointment',[AdminContoller::class,'show_appointment']);
Route::get('/approved/{id}',[AdminContoller::class,'approved']);
Route::get('/cancel/{id}',[AdminContoller::class,'cancel']);
Route::get('/delete_doctor/{id}',[AdminContoller::class,'delete_doctor']);
Route::get('/showdoctor',[AdminContoller::class,'showdoctor']);
Route::get('/update_doctor/{id}',[AdminContoller::class,'update_doctor']);
Route::post('/edit_doctor/{id}',[AdminContoller::class,'edit_doctor']);

