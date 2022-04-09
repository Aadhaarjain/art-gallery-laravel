<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstproject;
use App\Http\Controllers\RegistrationController;
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
/*Route::view('/','welcome');*/

Route::get('/',[firstproject::class,'index']);
Route::get('/gallery',[firstproject::class,'gallery']);
Route::get('/about',[firstproject::class,'about']);
Route::get('/contact',[firstproject::class,'contact']);
Route::get('/gallery01',[firstproject::class,'gallery01']);
Route::get('/gallery02',[firstproject::class,'gallery02']);
Route::get('/gallery03',[firstproject::class,'gallery03']);
Route::get('/gallery04',[firstproject::class,'gallery04']);
Route::get('/gallery05',[firstproject::class,'gallery05']);

Route::post('/add',[RegistrationController::class,'store']);
