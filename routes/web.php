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

Route::get('/', function () {
    return view('FrontEnd.home');
});

Route::get('/index.html', function () {
    return view('FrontEnd.home');
});

Route::get('/categoryTable.html', function () {
    return view('FrontEnd.categoryTable');
});

Route::get('/shipperTable.html', function () {
    return view('FrontEnd.shipperTable');
});

Route::get('/staffTable.html', function () {
    return view('FrontEnd.staffTable');
});

Route::get('/productTable.html', function () {
    return view('FrontEnd.productTable');
});

Route::get('/orderTable.html', function () {
    return view('FrontEnd.orderTable');
});

Route::get('/orderDetailTable.html', function () {
    return view('FrontEnd.orderDetailTable');
});

Route::get('/Restock.html', function () {
    return view('FrontEnd.Restock');
});

Route::get('/my-profile.html', function () {
    return view('FrontEnd.my-profile');
});

Route::get('/', 'App\Http\Controllers\AdminController@showDB');