<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
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



Auth::routes();

Route::group(['Middleware'=>'auth'],function(){
Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'show']);
Route::get('/categories/create/template', [CategoryController::class, 'templateadd']);
Route::post('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::patch('/categories/update/{id}',[CategoryController::class,'update']);
Route::delete('/categories/delete/{id}',[CategoryController::class,'delete']);

Route::get('/articles', [ArticleController::class, 'show']);
Route::get('/articles/create/template', [ArticleController::class, 'templateadd']);
Route::post('/articles/create', [ArticleController::class, 'create']);
Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
Route::patch('/articles/update/{id}',[ArticleController::class,'update']);
Route::delete('/articles/delete/{id}',[ArticleController::class,'delete']);
});