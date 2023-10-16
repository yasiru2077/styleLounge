<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartFuntionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;


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


route::get('/redirects',[HomeController::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Change the route from 'dashboard' to 'customer'
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

Route::get('adminfunction',[homecontroller::class,"Adduser"]);

Route::post('save-user',[homecontroller::class,"saveuser"]);

Route::post('finishEdit-user',[homecontroller::class,"finishEdituser"]);

Route::get('edit-user/{id}',[homecontroller::class,"edituser"]);

Route::get('delete-user/{id}',[homecontroller::class,"deleteuser"]);


Route::get('/subscription', [NewsletterController::class, 'index'])->name('subscription.index');
Route::post('/subscribe', [NewsletterController::class, 'subscribe']);
Route::resource('review', ReviewController::class);
Route::resource('/item', ItemController::class);
Route::resource('/addtoCart', CartController::class);
Route::resource('/goToCart', CartFuntionController::class);
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::view('/thank-you', 'thank-you'); // 'thank-you' is the name of the view file