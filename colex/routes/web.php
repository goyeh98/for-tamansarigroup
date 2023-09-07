<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\User\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('about_us', [PagesController::class, 'about_us'])->name('about_us');
Route::get('kolaborasi', [PagesController::class, 'kolaborasi'])->name('kolaborasi');
Route::get('promo', [PagesController::class, 'promo'])->name('promo');

Route::controller(ServiceController::class)->prefix('service')->name('service.')->group(function () {
    Route::get('pendirian-badan-usaha', 'pendirian_badan_usaha')->name('pendirian_badan_usaha');
    Route::get('perizinan-berusaha', 'perizinan_berusaha')->name('perizinan_berusaha');
    Route::get('ketenagakerjaan', 'ketenagakerjaan')->name('ketenagakerjaan');
    Route::get('lingkungan-hidup', 'lingkungan_hidup')->name('lingkungan_hidup');
    Route::get('izin-esdm', 'izin_esdm')->name('izin_esdm');
    Route::get('tanah-dan-bangunan', 'tanah_dan_bangunan')->name('tanah_dan_bangunan');
    Route::get('sertifikasi', 'sertifikasi')->name('sertifikasi');
    Route::get('perpajakan', 'perpajakan')->name('perpajakan');
    Route::get('hak-kekayaan-intelektual', 'hak_kekayaan_intelektual')->name('hak_kekayaan_intelektual');
});

Route::controller(NewsController::class)->prefix('news')->name('news.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('{slug}', 'show')->name('show');
});

Route::get('admin', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('admin', [AuthController::class, 'authenticate'])->name('authenticate');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('news', AdminNewsController::class);
    Route::post('news/upload-image', [AdminNewsController::class, 'uploadImage'])->name('news.upload_image');

    Route::prefix('users')->name('users.')->group(function () {
        Route::resource('roles', RoleController::class);
    });
    Route::resource('users', UserController::class);

    Route::resource('settings', SettingController::class)->only(['index', 'store', 'update']);
});
