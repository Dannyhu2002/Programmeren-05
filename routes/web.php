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
})->name('home');

route::prefix('food')->group(function() {
    Route::get('','FoodItemcontroller@index')->name('food');

    route::name('food.')->middleware('auth')->group(function (){
        Route::get('create','FoodItemcontroller@create')->name('create');
        Route::post('store','FoodItemcontroller@store')->name('store');
        Route::get('{id}','FoodItemcontroller@show')->name('show');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories');
