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
<<<<<<< HEAD

=======
>>>>>>> 5525b4e350bcde0891d85e1a3c568fb2e48d44ee
Route::get('/homepage', function () {
    return view('root.Homepage');
});
Route::get('/index', function () {
    return view('index');
<<<<<<< HEAD
});
=======
});
Route::get('/test/register', function () {
    return view('test_register');
});
Route::get('/demo/brand', function () {
    return view('demo.brandPage');
});

?>
>>>>>>> 5525b4e350bcde0891d85e1a3c568fb2e48d44ee
