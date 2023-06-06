<?php

use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeedBackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirect',[HomeController::class,"index"]);

Route::post('/adduser',[HomeController::class,"adduser"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[HomeController::class,"index"])->name('dashboard');
   
});


Route::get('charts',[ChartController::class,"index"]);
Route::get('/redirect',[ProductController::class,"index"]);
Route::get('add-products',[ProductController::class,"addProducts"]);
Route::post('save-products',[ProductController::class,"saveProducts"]);
Route::get('edit-products/{id}',[ProductController::class,"editProducts"]);
Route::post('update-products',[ProductController::class,"updateProduct"]);
Route::get('delete-products/{id}',[ProductController::class,"deleteProduct"]);
Route::get('delete-feedback/{id}',[ProductController::class,"deleteFeedback"]);
Route::get('add-feedback',[FeedBackController::class,"addFeedback"]);
Route::post('save-feedback',[FeedBackController::class,"saveFeedback"]);
Route::get('/redirect',[ProductController::class,"index"]);
Route::get('/add',[ProductController::class,"add"]);


