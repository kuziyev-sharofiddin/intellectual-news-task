<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\LeaderController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\ImageController;
 use App\Http\Controllers\LocalizationController;


Route::group(['middleware' => ['localisation']], function () {

    Route::post( 'login/authenticate', [\App\Http\Controllers\Auth\AuthController::class, 'authenticate']);
    Route::get( 'login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('admin.login');
    Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout']);

    Route::get('dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
    Route::resource('menus', MenuController::class);
    Route::resource('sheets', PagesController::class);
    Route::resource('leaders', LeaderController::class);
    Route::resource('document', DocumentController::class);
    Route::resource('images', ImageController::class);
});
