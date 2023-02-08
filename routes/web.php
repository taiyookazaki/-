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
Route::get('/gotouti_men/{gotouti_men}', [Gotouti_menController::class, 'gotouti_men']); 
Route::get('/prefectures/{prefecture}', [PrefecturesController::class ,'prefecture']);
Route::get('/user', [UserControllre::class, 'user']);
Route::get('/login', [UserControllre::class, 'login']); 
Route::post('/like/{gotouti_menId}',[LikeController::class,'store']);
Route::post('/unlike/{gotouti_menId}',[LikeController::class,'destroy']);

