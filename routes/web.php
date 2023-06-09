<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
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
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['role:manager']);
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['role:manager']);
});

Route::middleware(['auth', 'role:manager'])->group(function () {

    Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
    Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');
    Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');
    Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');
    Route::get('/employes/{id}/edit', [EmployeController::class, 'edit'])->name('employes.edit');
    Route::patch('/employes/{id}', [EmployeController::class, 'update'])->name('employes.update');
    Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employes.destroy');

});


require __DIR__.'/auth.php';
