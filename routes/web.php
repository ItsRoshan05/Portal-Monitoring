<?php

use App\Http\Controllers\SpiderrawController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\CsvModelingController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\PredictedController;
use App\Http\Controllers\SpiderRawAdminController;
use App\Http\Controllers\TargetUserSpiderController;
use App\Http\Controllers\UserController;
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


// Login route
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Register route
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Logout route
Route::any('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/predict', [DashboardController::class, 'predict'])->name('predict');

// Public routes
Route::get('/',[DashboardController::class, 'index']);

// Admin routes
Route::prefix('adm')->middleware('auth')->group(function () {
    Route::view('/tentang','admin.tentang');
    Route::get('/', [DashboardAdminController::class, 'index']);
    Route::resource('users', UserController::class);
    Route::resource('target_users', TargetUserSpiderController::class);
    Route::resource('spider_raw', SpiderRawAdminController::class);
    Route::get('/preprocessing', [CsvController::class, 'show'])->name('csv.show');
    Route::get('/preprocessing/{id}', [CsvController::class, 'showDetail'])->name('csv.showDetail');
    Route::get('/xtest', [CsvModelingController::class, 'showxtest'])->name('csv.showxtest');
    Route::get('/xtest/{id}', [CsvModelingController::class, 'showDetailXtest'])->name('csv.showDetailxtest');
    Route::get('/xtrain', [CsvModelingController::class, 'showxtrain'])->name('csv.showxtrain');
    Route::get('/xtrain/{id}', [CsvModelingController::class, 'showDetailXtrain'])->name('csv.showDetailxtrain');
    Route::get('/modelevaluasi', [CsvModelingController::class, 'showEvaluation'])->name('csv.showEvaluation');
    Route::get('/tfidf', [MetodeController::class, 'showtfidf'])->name('metode.tfidf');
    Route::get('/tfidf/{id}', [MetodeController::class, 'showdetailtfidf'])->name('metode.detailtfidf');
    Route::get('/predicted', [PredictedController::class, 'index'])->name('predicted.index');

    

});
