<?php

use App\Http\Controllers\CharacteristicController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\IntelligenceController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReccomendationController;
use App\Http\Controllers\ExpertConsultationController;
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
    return redirect('/dashboard');
});
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register')->middleware('guest');
    Route::post('/register', 'store');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // Route::resource('/profil-saya', ProfilIndex::class);
    Route::group(['prefix' =>'admin', 'middleware' => ['role:admin']], function () {
        Route::get('/manage-user', [UserController::class, 'index']);
    });
    Route::group(['middleware' => ['role:expert'], 'prefix' => 'expert'], function () {
        Route::get('/exp-consultation/{consul:id}/pertanyaan', [ExpertConsultationController::class, 'tambahPertanyaan'])->name('tambah-tanya');
        Route::put('/exp-consultation/{consul:id}/pertanyaan', [ExpertConsultationController::class, 'simpanPertanyaan'])->name('simpan-tanya');
        Route::resource('/characteristic', CharacteristicController::class);
        Route::resource('/intelligence', IntelligenceController::class);
        Route::resource('/study', StudyController::class);
        Route::resource('/knowledge', KnowledgeController::class);
        Route::resource('/rules', RuleController::class);
        Route::resource('/rekomendasi', ReccomendationController::class);
        Route::resource('/exp-consultation', ExpertConsultationController::class);

    });
    Route::group( ['prefix' => 'user', 'middleware' => ['role:user']], function () {
        Route::get('/my-consultation/list', [ConsultationController::class, 'list'])->name('my-consultation.list-index');
        Route::get('/my-consultation/{consul:id}/isi-konsultasi', [ConsultationController::class, 'isiKonsul'])->name('my-consultation.isi-konsul');
        Route::get('/my-consultation/{consul:id}/hasil', [ConsultationController::class, 'hasilKonsul'])->name('my-consultation.hasil');
        Route::put('/my-consultation/{consul:id}/simpan-konsultasi', [ConsultationController::class, 'simpanKonsul'])->name('my-consultation.simpan-konsul');
        Route::post('/my-consultation/list', [ConsultationController::class, 'addList'])->name('my-consultation.list-store');
        Route::resource('/my-consultation', ConsultationController::class);
    });
});
