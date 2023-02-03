<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrefecturesController;
use App\Http\Controllers\Gotouti_menController;

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

Route::get('/', function () {return view('welcome');});
Route::get('/prefectures', [PrefecturesController::class, 'index']); 
Route::get('/gotouti_men', [Gotouti_menController::class, 'prefecture']); 
Route::get('/prefectures/{prefecture}', [Gotouti_menController::class ,'show']);

