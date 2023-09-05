<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OtherpagesController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SitemapController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Route::get('/', [Controller::class,'index'])->name('index');
Route::get('/artist/create', [ArtistController::class,'create'])->name('artist.create');
Route::post('/artist/store', [ArtistController::class,'store'])->name('artist.store');
Route::get('/artist/{id}/edit', [ArtistController::class,'edit']);
Route::put('/artist/{id}/update', [ArtistController::class,'update']);
Route::get('/artist/{id}/delete', [ArtistController::class,'destroy']);
// Route::get('/search',[ArtistController::class,'search']);

Route::get('/group/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/group/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/group/{id}/delete', [CategoryController::class,'destroy']);

Route::get('/quotes/create', [QuotesController::class,'create'])->name('quotes.create');
Route::post('/quotes/store', [QuotesController::class,'store'])->name('quotes.store');
Route::get('/quotes/{id}/delete', [QuotesController::class,'destroy']);

Route::get('/category/{id?}/{quoteid?}', [Controller::class,'categoryfilter']);
Route::get('/author/{id?}', [Controller::class,'categoryauthor']);
Route::post('/search', [Controller::class,'search']);

Route::get('/term-of-use', [OtherpagesController::class,'terms_of_use']);
Route::get('/privacy-policy', [OtherpagesController::class,'privacy_policy']);
Route::get('/about-us', [OtherpagesController::class,'about_us']);

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [QuotesController::class,'create'])->name('dashboard');
});
