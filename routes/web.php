<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth']], function(){

Route::get('/prefectures', [PrefecturesController::class, 'index'])->name('index');; 
Route::get('/gotouti_men/{gotouti_men}', [Gotouti_menController::class, 'gotouti_men']); 
Route::get('/prefectures/{prefecture}', [PrefecturesController::class ,'prefecture']);
Route::get('/user', [UserControllre::class, 'user']);
Route::get('/login', [UserControllre::class, 'login']); 
Route::post("/like/{gotouti_men}", [Gotouti_menController::class, "like"])->name("like");
Route::post("/unlike/{gotouti_men}", [Gotouti_menController::class, "unlike"])->name("unlike");

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
