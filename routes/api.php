<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('products', 'Api\ProductController@index');
Route::get('/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('all.product');
Route::get('/product_media', [App\Http\Controllers\Api\ProductMediaController::class, 'index'])->name('all.product.image');
Route::get('/product_discounts', [App\Http\Controllers\Api\ProductDiscountController::class, 'index'])->name('all.product.discounts');
Route::get('/product_has_discounts', [App\Http\Controllers\Api\ProductHasDiscountController::class, 'index'])->name('all.product.has.discount');
Route::get('/product_stocks', [App\Http\Controllers\Api\ProductStockController::class, 'index'])->name('all.product.stock');
Route::get('/product_categories', [App\Http\Controllers\Api\ProductCategorieController::class, 'index'])->name('all.product.categories');
Route::get('/product_has_categories', [App\Http\Controllers\Api\ProductHasCategorieController::class, 'index'])->name('all.product.has.categorie');
Route::get('/allproducts', [App\Http\Controllers\Api\AllproductController::class, 'index'])->name('all.products.tables');

Route::put('/product_stocks', [App\Http\Controllers\Api\ProductStockController::class, 'store'])->name('all.product.stock');
