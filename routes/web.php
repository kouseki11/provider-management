<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('auth.login');
});

Route::get('/login', [LoginController::class,'index'])->name('auth.login');
Route::post('login', [LoginController::class, 'login'])->name('auth.authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/members', [MemberController::class,'index'])->name('admin.members.index');
Route::get('/members/create', [MemberController::class,'create'])->name('admin.members.create');
Route::post('/members', [MemberController::class,'store'])->name('admin.members.store');
Route::get('/members/{user}/edit', [MemberController::class,'edit'])->name('admin.members.edit');
Route::put('/members/{user}', [MemberController::class,'update'])->name('admin.members.update');
Route::delete('/members/{user}', [MemberController::class,'destroy'])->name('admin.members.destroy');
