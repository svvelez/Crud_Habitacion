<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitacionController;

 Route::get('/', function () {
    return view('habitacion.create');
});

  /*  Route::get('/products',[ProductsController::class,'index'])
->name('products.index');

Route::get('/products/create',[ProductsController::class,'create'])
->name('products.create');

Route::post('/products/create',[ProductsController::class,'store'])
->name('products.store'); */

 Route::resource('habitacion',HabitacionController::class);
