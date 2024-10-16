<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/', function () {
    return view('home', ['title' => 'Home Chart']);
});

Route::get('/report', function () {
    return view('report', ['title' => 'Report Page']);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/user', function () {
    return view('user', ['title' => 'User Setting']);
});

Route::get('/report/aos', function () {
    return view('report.aos', ['title' => 'Aircraft Operation Summary']);
});
Route::get('/report/pilot', function () {
    return view('report.pilot', ['title' => 'Pilot Report']);
});