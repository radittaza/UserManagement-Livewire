<?php

use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/users', Users::class);