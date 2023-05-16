<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\FrontendController::class, 'aboutus'])->name('about.us');
Route::get('/contact-us', [App\Http\Controllers\FrontendController::class, 'contactus'])->name('contact.us');
Route::get('/post-list', [App\Http\Controllers\FrontendController::class, 'posts'])->name('post.list');
Route::get('/work-list', [App\Http\Controllers\FrontendController::class, 'works'])->name('work.list');
Route::get('/works/{slug}', [App\Http\Controllers\FrontendController::class, 'work'])->name('work.show');
Route::get('/posts/{slug}', [App\Http\Controllers\FrontendController::class, 'post'])->name('post.show');

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

    //Post
    Route::controller(PostController::class)->group(function () {
        Route::get('/posts', 'index')->name('posts.index');
        Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
        Route::put('/posts/{post}', 'update')->name('posts.update');
        Route::post('/posts', 'store')->name('posts.store');
        Route::put('posts-add-image/{post}', 'add_image')->name('posts.add.image');
        Route::put('posts-delete-image/{post}', 'delete_image')->name('posts.delete.image');
        Route::delete('posts/{post}', 'destroy')->name('posts.destroy');
        Route::get('posts/{post}/publish', 'publish')->name('posts.publish');
        Route::get('posts/{post}/unpublish', 'unpublish')->name('posts.unpublish');
    });

    //Work
    Route::controller(WorkController::class)->group(function () {
        Route::get('/works', 'index')->name('works.index');
        Route::get('/works/{work}/edit', 'edit')->name('works.edit');
        Route::put('/works/{work}', 'update')->name('works.update');
        Route::post('/works', 'store')->name('works.store');
        Route::put('works-add-image/{work}', 'add_image')->name('works.add.image');
        Route::put('works-delete-image/{work}', 'delete_image')->name('works.delete.image');
        Route::delete('works/{work}', 'destroy')->name('works.destroy');
        Route::get('works/{work}/publish', 'publish')->name('works.publish');
        Route::get('works/{work}/unpublish', 'unpublish')->name('works.unpublish');
    });
});
