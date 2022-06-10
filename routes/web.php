<?php

use App\Http\Controllers\MessageController;
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

// Route::get('/',[MessageController::class,'index'])->name('index');
Route::post('/sendby1',[MessageController::class,'first'])->name('first');
Route::post('/sendby2',[MessageController::class,'second'])->name('second');
Route::get('/',[MessageController::class,'showfirst'])->name('showfirst');
Route::get('/second',[MessageController::class,'showsecond'])->name('showsecond');
