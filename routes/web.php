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
Route::get('home', 'HomeController@show')->name('home');
Route::get('food','FoodItemcontroller@index')->name('food');
Route::get('food/create','FoodItemcontroller@create')->name('food.create');
Route::post('food/store','FoodItemcontroller@store')->name('food.store');
Route::get('food/{id}','FoodItemcontroller@show')->name('food.show');
