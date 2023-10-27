<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Track_orderController;
use App\Http\Controllers\RefundPolicyController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
use App\Models\Branch;
use App\Models\Cart;

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

Auth::routes(['verify'=>true]);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');
    Route::get('/favorites/{id}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders');
    Route::get('/account_details', [ProfileController::class , 'account_details'])->name('account_details');
    Route::get('/track-order', [Track_orderController::class, 'index'])->name('track-order');
    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('specific-books');
    Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
    // Route::post('/order/store', [CartController::class, 'store'])->name('cart.store');
    Route::view('/admin/home', 'admin.home')->name('admin.home');
});
Route::get('/home', [IndexController::class, 'index'])->name('homePage');
Route::get('/branches', [BranchController::class, 'index'])->name('branches');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/refund-policy', [RefundPolicyController::class, 'index'])->name('refund-policy');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('specific-book');

