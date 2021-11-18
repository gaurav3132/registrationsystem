<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

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

Route::post('register',[Usercontroller::class,'savedata']);

Route::get('/login', function () {
    if (session()->has('user'))
    {
        return view('profile');
    }
    
    return view('login');
});

Route::post('loginsuccess',[Usercontroller::class,'login']);

Route::get('/logout', function () {
    if (session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect("login");

});