<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyaController;

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

Route::get("/index",[AyaController::class,'index'])->name('index');
Route::get("/store",[AyaController::class,'store'])->name('store');
Route::get("/about",[AyaController::class,'about'])->name('about');
Route::get("/products",[AyaController::class,'products'])->name('products');
