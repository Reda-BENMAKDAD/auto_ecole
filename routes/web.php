<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('manager', function () {
    return "cette page est réservée aux managers";
})->middleware(['auth', 'role:manager']);

Route::get('secretaire', function () {
    return "cette page est réservée aux secretaires";
})->middleware(['auth', 'role:secretaire']);

Route::get('moniteur', function () {
    return "cette page est réservée aux moniteurs";
})->middleware(['auth', 'role:moniteur']);

require __DIR__.'/auth.php';
