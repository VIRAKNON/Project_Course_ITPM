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

Route::view('/','index1');
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
Route::get('controll', function () {
    return view('admin.controll');
});




Route::get('/homepage', function () {
    return view('root.Homepage');
});
Route::get('/index', function () {
    return view('index');
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
Route::get('/index1', function () {
    return view('index1');
});

// Admin : manage products , setting page
// User : register , user profile 
Route::view('/manage/products','admin.manageProduct');
Route::get('/setting/page',function(){
    return view('admin.setting_page');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/test/register', function () {
    return view('test_register');
});
Route::get('/user/profile', function () {
    return view('user_profile');
});
Route::get('/manage/user',function(){
    return view('admin.manage_user');
})




?>
