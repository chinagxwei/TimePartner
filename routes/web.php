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
    return view('welcome');
});

Route::prefix('/v1/system')->group(function () {
    Route::any('/{action?}', function () {
        return view('admin');
    });
//    Route::any('/welcome', function () {
//        return view('admin');
//    });
});
