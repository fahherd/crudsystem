<?php

use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\siswaController;
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

Route::get('/', [employeecontroller::class, 'main']);

//addData
Route::post('/submit', [employeecontroller::class, 'addata']);
//editData
Route::get('/edit/{id}', [employeecontroller::class, 'editdata']);
Route::post('/updatedata', [employeecontroller::class, 'updatedata']);
//deleteData
Route::get('/delete/{id}', [employeecontroller::class, 'deletedata']);
