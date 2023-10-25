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
// route name


Route::get('/admin', function () {
    return ' welcome2';
});


// // route parameters
// // requiered parameter
// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// });

// // optional (?) parameter function ()

// Route::get('/show-string/{id?}', function () {
//     return ' welcome';
// });

// route name