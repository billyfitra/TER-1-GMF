<?php

use App\Http\Controllers;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


/* Routes Navigation Bar */
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/report', function () {
    return view('report', ['title' => 'Report Page']);
});

Route::get('/test', function () {
    return view('test', ['title' => 'Testing Area']);
});

/*Route::get('/users', function () {
    return view('users', ['title' => 'User Setting']);
});*/

/* Routes for User Settings */

Route::get('/user-setting', [Controllers\UserController::class, 'index']);

Route::get('/users/create', [Controllers\UserController::class, 'create']);

Route::post('/users', [Controllers\UserController::class, 'store']);

Route::get('/users/{id}', [Controllers\UserController::class, 'show']);

/* Routes Modul pada Report */
Route::get('/report/aos', function () {
    return view('report.aos-content'); //Aircraft Operation Summary
})->name('report.aos');

Route::get('/report/pilot', function () {
    return view('report.pilot-content'); //Pilot Report And Technical Delay
})->name('report.pilot');

Route::get('/report/cumulative', function () {
    return view('report.cumulative-content'); //Cumulative Flight Hours and Take Off
})->name('report.cumulative');

Route::get('/report/etops', function () {
    return view('report.etops-report'); //Etops Reliability Report
})->name('report.etops');