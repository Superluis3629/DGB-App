<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\IndexController;
use App\Http\Controllers\API\AppController;
use App\Http\Controllers\API\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('{any}', function () {
//     return view('app');
// })->where('any','.*');

// Route::get('/', [IndexController::class, 'index']);
Route::get('/', [AppController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
