<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("claims")->name('claims.')->group(function () {

});

Route::prefix("users")->name('users.')->group(function () {

});
