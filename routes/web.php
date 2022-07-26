<?php

use App\Http\Controllers\PracticeController;
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
Route::get('test', [PracticeController::class, 'index']);
Route::get('user-name', [PracticeController::class, 'userName']);
Route::get('get-order', [PracticeController::class, 'order']);
Route::get('get-cart', [PracticeController::class, 'cart']);
