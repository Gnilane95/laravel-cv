<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;


Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/', [IdentityController::class, 'index'])->name("home");
Route::resource('identities', IdentityController::class);

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
