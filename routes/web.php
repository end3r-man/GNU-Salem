<?php

use App\Livewire\Home\IndexPg;
use Illuminate\Support\Facades\Route;

Route::group(['/'], function () {
   Route::get('/', IndexPg::class)->name('home'); 
});