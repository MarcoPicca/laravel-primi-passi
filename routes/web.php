<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('fenicotteri');
});

Route::get('/anatre.blade.php', function () {
    return view('anatre');
});

Route::get('/fenicotteri.blade.php', function () {
    return view('fenicotteri');
});
