<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LocalizationController;


Route::group(['middleware' => ['localisation']], function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/about-center/history/{id}', [MainController::class, 'historyCenter'])->name('about-center.history');
    Route::get('/center-news/{id}', [MainController::class, 'news'])->name('center-news');
    Route::get('/about-center/structure/{id}', [MainController::class, 'structureCenter'])->name('about-center.structure');
    Route::get('/leaderships/{tag}', [MainController::class, 'leaderShip'])->name('leaderships');
    Route::get('/main-activity/{id}', [MainController::class, 'mainActivity'])->name('main-activity');
    Route::get('/documents/{tag}', [MainController::class, 'documents'])->name('documents');
    Route::get('/cooperation/{id}', [MainController::class, 'cooperation'])->name('cooperation');
    Route::get('/mediateka/{tag}', [MainController::class, 'centerNews'])->name('mediateka');
    Route::get('/mediateka/news/{id}', [MainController::class, 'show'])->name('news.show');
    Route::get('/press/{tag}', [MainController::class, 'press'])->name('press');
    Route::get('/interactive/{tag}', [MainController::class, 'interactive'])->name('interactive');
    Route::get('/connection/many-questions', [MainController::class, 'manyQuestions'])->name('connection.many-questions');
    Route::get('/events', [MainController::class, 'events'])->name('events');
    Route::get('/data/{id}', [MainController::class, 'openData'])->name('open-data');
});

Route::get('locale/{lange}', [LocalizationController::class, 'setLang']);
