<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kadai01Controller;
use App\Http\Controllers\Kadai02_1Controller;
use App\Http\Controllers\Kadai02_2Controller;
use App\Http\Controllers\Kadai02_3Controller;
use App\Http\Controllers\Kadai03Controller;
use App\Http\Controllers\Kadai04Controller;
use App\Http\Controllers\Kadai06Controller;
use APP\Http\Controllers\ArticlesController;


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

require __DIR__.'/auth.php';


// Kadai01
Route::get('/kadai01', [Kadai01Controller::class, 'index']);

// Kadai02_1
Route::get('/kadai02_1', [App\Http\Controllers\Kadai02_1Controller::class, 'index']);

// Kadai02_2
Route::get('/kadai02_2', [App\Http\Controllers\Kadai02_2Controller::class, 'index']);

// Kadai02_3
Route::get('/kadai02_3', [App\Http\Controllers\Kadai02_3Controller::class, 'index']);

// Kadai03
Route::get('/kadai03', [App\Http\Controllers\Kadai03Controller::class, 'index']);

Route::get('/kadai03/registration', [App\Http\Controllers\Kadai03Controller::class, 'create']);

Route::get('/kadai03/detail', [App\Http\Controllers\Kadai03Controller::class, 'show']);

Route::get('/kadai03/editing', [App\Http\Controllers\Kadai03Controller::class, 'edit']);

Route::get('/kadai04', [App\Http\Controllers\Kadai04Controller::class, 'index']);

Route::post('/kadai04', [App\Http\Controllers\Kadai04Controller::class, 'post']);

Route::resource('articles', App\Http\Controllers\ArticlesController::class);
//
// Route::resource('articles', ArticlesController::class);
