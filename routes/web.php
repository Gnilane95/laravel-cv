<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\SkillController;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/', [IdentityController::class, 'index'])->name("home");
Route::get('/', [FormationController::class, 'index'])->name("home");
Route::resource('identities', IdentityController::class);
Route::resource('formations', FormationController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('skills', SkillController::class);
Route::resource('home', HomeController::class);

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
