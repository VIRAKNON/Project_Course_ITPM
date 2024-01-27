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
    return view('welcome');
});
Route::get('Productdetail', function () {
    return view('Productdetail');
});
Route::get('VeiwCardpage', function () {
    return view('VeiwCard');
});
Route::get('CheckOut', function () {
    return view('CheckOut');
});
Route::get('QRScan', function () {
    return view('QRScan');
});
Route::get('CardPay', function () {
    return view('CardPay');
});
Route::get('COD', function () {
    return view('COD');
});


