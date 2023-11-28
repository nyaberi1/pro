<?php

use App\Http\Controllers\EnrollsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/enrolls', [EnrollsController::class, 'index'])->name('enrolls');
Route::post('/enrolls/store', [EnrollsController::class, 'store'])->name('enrolls.store');
Route::get('/enrolls/{enroll}/edit', [EnrollsController::class, 'edit'])->name('enrolls.edit');
Route::put('/enrolls/{enroll}', [EnrollsController::class, 'update'])->name('enrolls.update');
Route::delete('/enrolls/{enroll}', [EnrollsController::class, 'destroy'])->name('enrolls.delete');

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/enrollment', [PagesController::class, 'enrollment'])->name('enrollment');
//Route::get('/edit', [PagesController::class, 'index'])->name('edit');

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
