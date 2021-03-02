<?php

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

// Route::get('/', function () {
//     return view('frontend.shop_home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/reviews', function() {
	return view('reviews');
})->middleware(['auth'])->name('reviews');

Route::get('/suggestions', function() {
	return view('suggestions');
})->middleware(['auth'])->name('suggestions');

Route::delete('admin_delete_suggestion/{slug}', [App\Http\Controllers\SuggestionController::class, 'delete'])->middleware(['auth'])->name('admin_delete_suggestion');

Route::prefix('vendor')->group(function() {
	Route::get('/products', [App\Http\Controllers\VendorController::class, 'products'])->name('products');
	Route::get('/edit_product/{slug}', [App\Http\Controllers\VendorController::class, 'editProduct'])->name('edit_product');
	Route::post('/create_product', [App\Http\Controllers\VendorController::class, 'addProduct'])->name('add');
	Route::put('/update_product/{slug}', [App\Http\Controllers\VendorController::class, 'updateProduct'])->name('update_product');
	Route::delete('/delete_product/{slug}', [App\Http\Controllers\VendorController::class, 'delete_product'])->name('delete_product');
	Route::get('/shop_home/{id}', [App\Http\Controllers\ShopController::class, 'shopHome'])->name('shop_name');
	Route::put('/shop/{id}', [App\Http\Controllers\ShopController::class, 'store'])->name('update_shop');
});

Route::prefix('admin')->group(function() {
	Route::get('/', [App\Http\Controllers\AdminController::class, 'home'])->name('admin_home');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('product/{slug}', [App\Http\Controllers\HomeController::class, 'productDetail'])->name('product_detail');
// Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'adminReviews'])->name('admin_reviews');
Route::post('/suggest', [App\Http\Controllers\SuggestionController::class, 'store'])->name('suggest');
Route::post('/review', [App\Http\Controllers\ReviewController::class, 'review'])->name('review');
Route::delete('/delete_review/{id}', [App\Http\Controllers\AdminController::class, 'deleteReview'])->name('delete_review');
Route::delete('/admin_delete_product/{slug}', [App\Http\Controllers\AdminController::class, 'admin_delete_product'])->name('admin_delete_product');
require __DIR__.'/auth.php';
