<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/contacts/{lang?}', [MainController::class,'contacts']);
Route::get('/doctors/{lang?}', [MainController::class,'doctors']);

Route::post('/callform', [MainController::class,'callform']);

Route::get('/{lang?}', [MainController::class,'main']);



