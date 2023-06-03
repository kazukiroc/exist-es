<?php

use App\Http\Controllers\CharacteristicController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\IntelligenceController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\StudyController;
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

Route::get('/', function () {
    return redirect('/consultation');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store');
});

// Route::get('/home', [HomeController::class, 'index']);
Route::resource('/consultation', ConsultationController::class)->middleware('auth');
Route::resource('/characteristic', CharacteristicController::class)->middleware('auth');
Route::resource('/intelligence', IntelligenceController::class)->middleware('auth');
Route::resource('/study', StudyController::class)->middleware('auth');
Route::resource('/knowledge', KnowledgeController::class)->middleware('auth');
Route::resource('/rules', RuleController::class)->middleware('auth');
