<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[ArticleController::class,'article']);
Route::get('/softDelete/{id}',[ArticleController::class,'softDelete']);
Route::get('forceDelete/{id}',[ArticleController::class,'forceDelete']);

Route::get('trashed',[ArticleController::class,'trashed']);
Route::get('restore/{id}',[ArticleController::class,'restore']);
Route::get('restore-all',[ArticleController::class,'restoreAll']);

