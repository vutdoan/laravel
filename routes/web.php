<?php

use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\QuestionController;
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
    return view('index');
});

Route::get('/products/insert',[Productcontroller::class,'show']);
Route::get('/get-question', [QuestionController::class, 'get'])->name('get-question');
Route::get('/question', [QuestionController::class, 'question'])->name('question');
Route::post('/insert-question', [QuestionController::class, 'insert'])->name('insert-question');

Route::post('/products/insert', [Productcontroller::class, 'insert'])-> name('productsinsert');