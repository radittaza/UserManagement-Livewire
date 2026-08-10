<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect('/counter');
});

use App\Livewire\Counter;
use App\Livewire\Users;

Route::get('/counter', Counter::class);
Route::get('/users', function (){
    return view('users');
});