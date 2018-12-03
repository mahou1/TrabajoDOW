<?php

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
    return view('index');
});

<<<<<<< HEAD
Route::resource('tours','ToursController');
=======
Route::resource('guias','GuiasController');
>>>>>>> 5ec22bae7c5b532ba5e5b5fe882ff73f35cce443
