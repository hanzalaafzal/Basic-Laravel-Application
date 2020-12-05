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

Route::prefix('/')->group(function () {


      Route::resource('/index','App\Http\Controllers\PriceController');

      Route::resource('/contact','App\Http\Controllers\contactController');

      

      Route::get('/dashboard',[App\Http\Controllers\customAuth::class,'dashboard'])->name('dashboard');



      Route::get('/signin',[App\Http\Controllers\customAuth::class, 'showLoginForm'])->name('customLogin');
      Route::get('/signup',[App\Http\Controllers\customAuth::class, 'showRegistrationForm'])->name('customRegister');
      Route::get('/logout',[App\Http\Controllers\customAuth::class,'customLogout'])->name('customLogout');

      Route::get('/',function(){
        return redirect('/index');
      });

    //  Route::resource('contact','');
      //Route::resource('contact','')
});

Auth::routes();
