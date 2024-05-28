<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StuffController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/single-news', [PageController::class, 'singleNews'])->name('singleNews');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/single-player', [PageController::class, 'singlePlayer'])->name('singlePlayer');

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index')->middleware('admin.or.blogger');


Route::prefix('/admin')->name('admin.')->middleware('web')->group(function(){
    Route::resource('news', NewsController::class);
    Route::resource('stuffs', StuffController::class);
    Route::resource('players', PlayerController::class);
    Route::get('/admin', [DashboardController::class, 'AdminDashboard'])->name('AdminDashboard');
})->middleware('admin.or.blogger');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
