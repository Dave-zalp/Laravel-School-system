<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'user',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::match(['get','post'], 'taketest', [UserController::class, 'Usertest'])->name('take.test');
    Route::get('/exam', [ExamController::class, 'index'])->name('user.exam')->middleware('verifyexam');
});





Route::get('/about', function (){
    return view('about');
})->name('about');





Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

require __DIR__.'/auth.php';