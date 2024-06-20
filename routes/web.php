<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Models\products;

Route::get('/', function () {
    return view('welcome');
});
/**
 * Routes prducts module 
 */

Route::get('/products',[ProductsController::class, 'index']);
Route::get('/products/create',[ProductsController::class, 'create']);
Route::get('/products/{id}',[ProductsController::class, 'show']);
Route::post('/newProduct', [ProductsController::class, 'store']);

/**
 * Routes orders module 
 */

Route::get('/orders',[OrdersController::class, 'index']);
Route::get('/orders/{id}',[OrdersController::class, 'show']);
Route::get('/create', [OrdersController::class, 'create']);

/**
 * Routes orders module 
 */
Route::get('prueba', function(){
    $product = new Products;
    $product->productName = 'testName5';
    $product->productPrice = 346;
    $product->productDescription = 'testDescription5';
    $product->productStock = 23;
    $product->save();
    return $product;
});

