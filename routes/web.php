<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SettingController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    //Settings
    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings', 'index')->name('settings.index');
        Route::put('/settings/{setting}', 'update')->name('settings.update');
        Route::put('/settings/logo-add/{setting}', 'add_logo')->name('add.logo');
        Route::put('/settings/logo-delete/{setting}', 'delete_logo')->name('delete.logo');
    });

    //Partners
    Route::controller(PartnerController::class)->group(function () {
        Route::get('/partners', 'index')->name('partners.index');
        Route::post('/partners', 'store')->name('partners.store');
        Route::get('/partners/deactivate/{partner}', 'deactivate')->name('partners.deactivate');
        Route::get('/partners/activate/{partner}', 'activate')->name('partners.activate');
        Route::get('/partners/delete/{partner}', 'delete')->name('partners.delete');
    });

    //Banner
    Route::controller(BannerController::class)->group(function () {
        Route::get('/banners', 'index')->name('banners.index');
        Route::get('/banners/{banner}/edit', 'edit')->name('banners.edit');
        Route::put('/banners/{banner}', 'update')->name('banners.update');
        Route::post('/banners', 'store')->name('banners.store');
        Route::get('/banners/deactivate/{banner}', 'deactivate')->name('banners.deactivate');
        Route::get('/banners/activate/{banner}', 'activate')->name('banners.activate');
        Route::put('banners-add-image/{banner}', 'add_image')->name('banners.add.image');
        Route::put('banners-delete-image/{banner}', 'delete_image')->name('banners.delete.image');
        Route::delete('banners/{banner}', 'destroy')->name('banners.destroy');
    });
});
