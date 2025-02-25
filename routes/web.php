<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

//creazione del gruppo publicController
Route::controller(PublicController::class)->group(function () {
    //rotta che rimanda alla homepage del sito web
    Route::get('/', 'index')->name('homepage');
});

// gruppo articoli articleController
Route::prefix('articles/')->controller(ArticleController::class)->group(function () {
    // view creazione articolo
    Route::get('create', 'createArticle')->name('createarticle');
    // view tutti gli articoli
    Route::get('indexAll', 'indexAll')->name('article.indexAll');
    // view dettaglio articolo
    Route::get('show/{article}', 'show')->name('article.show');
    // view articoli per categoria
    Route::get('/category/{category}', 'byCategory')->name('byCategory');
});

Route::prefix('revisor/')->controller(RevisorController::class)->group(function () {
    // view elenco articoli da revisionare
    Route::get('index', 'index')->middleware('isRevisor')->name('revisor.index');
    // view accettazione dell'articolo
    Route::patch('accept/{article}', 'accept')->name('accept');
    // view rifiuto dell'articolo
    Route::patch('reject/{article}', 'reject')->name('reject');
    // rotta che fa scattare la richiesta di mail per la candidatura
    Route::get('request/', 'becomeRevisor')->middleware('auth')->name('become.revisor');
    // rotta per rendere effettivo un utente come revisore
    Route::get('make/revisor/{user}', 'makeRevisor')->middleware('auth')->name('make.revisor');

});
