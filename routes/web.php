<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/{id}', [UserController::class, 'index']) ;
Route::get('/test', [UserController::class, 'test']);

Route::resource('photos', PhotoController::class);

// Route::get('/user/{name?}', function ($name = 'John') {
//     return $name;
// });

