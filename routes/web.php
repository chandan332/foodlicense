<?php

use App\Livewire\HomePage;
use App\Livewire\ServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('/fssai-registration', ServicePage::class)->defaults('service', 'fssai')->name('fssai-registration');
Route::get('/gst-registration', ServicePage::class)->defaults('service', 'gst')->name('gst-registration');
Route::get('/trademark-registration', ServicePage::class)->defaults('service', 'trademark')->name('trademark-registration');
