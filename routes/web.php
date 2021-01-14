<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('_frontend.dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/form', function () {
    return view('_frontend.form');
})->name('form');

Route::middleware(['auth:sanctum', 'verified'])->get('/card', function () {
    return view('_frontend.card');
})->name('card');

Route::middleware(['auth:sanctum', 'verified'])->get('/chart', function () {
    return view('_frontend.chart');
})->name('chart');

Route::middleware(['auth:sanctum', 'verified'])->get('/button', function () {
    return view('_frontend.button');
})->name('button');

Route::middleware(['auth:sanctum', 'verified'])->get('/modal', function () {
    return view('_frontend.modal');
})->name('modal');

Route::middleware(['auth:sanctum', 'verified'])->get('/table', function () {
    return view('_frontend.table');
})->name('table');

//
Route::middleware(['auth:sanctum', 'verified'])->get('/login-template', function () {
    return view('_frontend.login');
})->name('login-template');

Route::middleware(['auth:sanctum', 'verified'])->get('/regist-template', function () {
    return view('_frontend.register');
})->name('regist-template');

Route::middleware(['auth:sanctum', 'verified'])->get('/forgot-password-template', function () {
    return view('_frontend.forgot_password');
})->name('forgot-password-template');

Route::middleware(['auth:sanctum', 'verified'])->get('/not-found', function () {
    return view('_frontend.not_found');
})->name('not-found');

Route::middleware(['auth:sanctum', 'verified'])->get('/blank', function () {
    return view('_frontend.blank');
})->name('blank');
