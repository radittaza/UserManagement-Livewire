<?php

use App\Livewire\Users;
use App\Livewire\Contacts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/users', Users::class);
Route::get('/contacts', Contacts::class);