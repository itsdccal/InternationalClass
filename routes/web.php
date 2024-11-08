<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/IE', function () {
    return view('InternationalExposure');
});
Route::get('/studyProgram', function () {
    return view('studyProgram');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
