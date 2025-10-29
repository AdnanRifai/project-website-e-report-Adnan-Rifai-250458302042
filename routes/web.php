<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Features;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::prefix('admin')->middleware('auth')->group(function() {
    
    Route::get('/', Features\Dashboard::class)->name('admin.dashboard');
    Route::get('/list-laporan', Features\ListLaporan::class)->name('admin.list-laporan');
    Route::get('/list-warga', Features\ListWarga::class)->name('admin.list-warga');
    Route::get('/profile', Features\MyProfile::class)->name('admin.profile');
});

Route::prefix('warga')->middleware('auth')->group(function() {
    
    Route::get('/', Features\Warga\Dashboard::class)->name('warga.dashboard');
    Route::get('/list-laporan', Features\Warga\Laporan::class)->name('warga.list-laporan');
    Route::get('/profile', Features\Warga\Profile::class)->name('warga.profile');
});