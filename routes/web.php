<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Route::get('/', [ArtistController::class,'index'])->name('artist.index');
Route::get('/artist/create', [ArtistController::class,'create'])->name('artist.create');
Route::post('/artist/store', [ArtistController::class,'store'])->name('artist.store');
Route::get('/artist/{id}/edit', [ArtistController::class,'edit']);
Route::put('/artist/{id}/update', [ArtistController::class,'update']);
Route::get('/artist/{id}/delete', [ArtistController::class,'destroy']);
Route::get('/search',[ArtistController::class,'search']);

// Route::get('/home', function () {return view('home');});
// Route::get('/{id?}', function (string $id = null) {return "<h1>inserted id : ".$id."</h1>";});
// Route::get('/',[Controller::class,'findquotes']);