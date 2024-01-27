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
<<<<<<< HEAD
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


=======
<<<<<<< HEAD

Route::get('/homepage', function () {
    return view('root.Homepage');
});
Route::get('/index', function () {
    return view('index');
=======
Route::get('/test/register', function () {
    return view('test_register');
>>>>>>> a3591b72b8d2f5e19ab54ed126fe46ce405c3eb1
});
>>>>>>> 3c9ff7334af5ea785fc11ddb6e10f88a641fce5d
