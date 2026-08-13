<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/users');
});

Route::get('/users', function (){
    return view('users');
});