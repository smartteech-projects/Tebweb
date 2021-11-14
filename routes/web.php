<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
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

Route::get('/', [AuthController::class, 'index'])->name('login.index');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['role:admin']], function () {
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', [DashboardController::class, 'indexAdmin'])->name('admin.dashboard');
        Route::resource('patients',PatientController::class);
        Route::resource('departments',DepartmentController::class);
        Route::resource('doctors',DoctorController::class);

    });

//        Route::post('/login', [AuthController::class, 'login'])->name('login');
    });
Route::group(['middleware' => ['role:patient']], function () {
    Route::get('/patient/dashboard', [DashboardController::class, 'indexAdmin'])->name('patient.dashboard');
//        Route::post('/login', [AuthController::class, 'login'])->name('login');
});
Route::get('/dashboard',function (){
    return view('home.dashboard');
});
