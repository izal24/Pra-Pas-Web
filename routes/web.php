<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\KomikController;
use App\Http\Controllers\AuthorController;
use App\Models\Character;
use App\Models\Komik;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World !";
});

Route::get('/home', function () {
    return view("home")->with("title", "Home");
});

Route::get('/characters/all', [CharacterController::class, 'index']);
Route::get('/characters/detail{character}', [CharacterController::class, 'show']);

Route::get('/komik/all', [KomikController::class, 'index']);
Route::get('/komik/detail{komik}', [KomikController::class, 'show']);

Route::get('/author/all', [AuthorController::class, 'index']);
Route::get('/author/detail{author}', [AuthorController::class, 'show']);
