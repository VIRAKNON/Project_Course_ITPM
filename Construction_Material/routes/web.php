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

Route::view('/','index2');
Route::get('', function () {
    return view('Productdetail');
})->name('Productdetail');
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
Route::get('controll', function () {
    return view('admin.controll');
})->name('admin.control');




Route::get('/homepage', function () {
    return view('root.Homepage');
});

Route::get('/demo/brand', function () {
    return view('demo.brandPage');
});
// Route::get('/menu', function () {
//     return view('menu');
// });
// Route::get('/category', function () {
//     return view('category');
// });

Route::view('/admin', 'admin.index');

Route::view('/index', 'index2');
// Admin : manage products , setting page
// User : register , user profile
Route::view('/manageProducts','admin.manageProduct')->name('admin.manageProduct');
Route::get('/settingPage',function(){
    return view('admin.setting_page');
})->name('admin.setting');
Route::get('/register', function () {
    return view('register');
});

Route::get('/test/register', function () {
    return view('test_register');
});
Route::get('/user/profile', function () {
    return view('user_profile');
});
Route::get('/manageUser',function(){
    return view('admin.manage_user');
})->name('admin.manageUser');

Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');


?>
