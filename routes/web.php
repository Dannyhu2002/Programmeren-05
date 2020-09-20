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

Route::get('food','FoodItemcontroller@index')->name('Food');
Route::get('food/create','FoodItemcontroller@create')->name('Food.create');
Route::post('food/store','FoodItemcontroller@store')->name('Food.store');
Route::get('food/{id}','FoodItemcontroller@show')->name('Food.show');
