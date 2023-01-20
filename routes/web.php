<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route della home
Route::get("/", function () {
    return view("home");
})->name("home");
// route dei contatti
Route::get("/contatti", function () {
    $array = ["Aiuto", "Chat live", "Supporto"];
    return view("contatti",[
        "array" => $array,
    ]);
})->name("contatti");
// route delle info
Route::get("/info", function () {
    $array = ["Chi Siamo", "Social", "email"];
    return view("info",[
        "array" => $array,
    ]);
})->name("info");