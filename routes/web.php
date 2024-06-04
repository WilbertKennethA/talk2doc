<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/pharmacy', [pageController::class, 'pharmacy'])->name('pharmacy');
Route::get('/appointment', [pageController::class, 'appointment'])->name('appointment');

Route::get('/faq', [pageController::class, 'faq'])->name('faq');
Route::post('/store', [pageController::class, 'store'])->name('store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/doctor/{doctors}', [pageController::class, 'show'])->name('doctor');
    Route::get('/history', [pageController::class, 'history'])->name('history');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
