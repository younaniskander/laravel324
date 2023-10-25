<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SecondController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


// // Route::get('index',[UserController::class,"getIndex"]);
// Route::get('/', function () {
    
//     $data = 'ahmed emam';
//     $id = 55;
//     return view('welcome', compact('data','id')) ;
// });

// Route::get('/about', function () {
//     return view('about');
// });

// // // route name
// // Route::namespace('Front')->group(function(){

// //     //all route only access controller or methods in folder name Front
// //     // Routr::get('users')
// // });

// // Route::get('forPerson', function () {
// //     return (' welcome');
// // }) -> middleware('auth');

// // Route::get('show','UserController@showUserName');
// // Route::delete('delete','UserController@showUserName');
// // Route::get('edit','UserController@showUserName');
// // Route::put('updata','UserController@showUserName');

    

// // Route::get('second',[SecondController::class,"showString"]);
// // // route parameters
// // // requiered parameter
// // Route::get('/show-number/{id}', function ($id) {
// //     return $id;
// // });

// // // optional (?) parameter function ()

// // Route::get('/show-string/{id?}', function () {
// //     return ' welcome';
// // });

// // // route name



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/',function() {
        return 'home';
    });
