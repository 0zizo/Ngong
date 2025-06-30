<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TrafficController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', RoleMiddleware::class. ':business'])->group(function () {
    Route::resource('businesses', BusinessController::class);
});
Route::resource('business', \App\Http\Controllers\BusinessController::class);

Route::get('/schools', [\App\Http\Controllers\SchoolController::class, 'index'])->name('schools.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware('role:business')->resource('businesses', BusinessController::class);
    Route::middleware('role:school_admin')->resource('schools', SchoolController::class);
    Route::middleware('role:traffic_monitor')->get('traffic', [TrafficController::class, 'index'])->name('traffic.index');
    Route::middleware('role:resident')->get('social', [\App\Http\Livewire\SocialFeed::class, 'render'])->name('social.index');
    Route::middleware('role:admin')->get('admin', function () {
        return view('dashboards.admin');
    })->name('admin');
});
