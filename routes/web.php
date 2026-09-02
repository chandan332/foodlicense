<?php

use App\Livewire\HomePage;
use App\Livewire\AdminDashboard;
use App\Livewire\AdminLogin;
use App\Livewire\ServicePage;
use App\Livewire\ThankYouPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/fssai-registration', ServicePage::class)->defaults('service', 'fssai')->name('fssai-registration');
Route::get('/gst-registration', ServicePage::class)->defaults('service', 'gst')->name('gst-registration');
Route::get('/trademark-registration', ServicePage::class)->defaults('service', 'trademark')->name('trademark-registration');
Route::get('/thank-you', ThankYouPage::class)->name('thank-you');
Route::get('/admin/login', AdminLogin::class)->middleware('guest:admin')->name('admin.login');
Route::get('/admin', AdminDashboard::class)->middleware('auth:admin')->name('admin.dashboard');
