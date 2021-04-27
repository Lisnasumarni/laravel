<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\OptionValuesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product_skusController;
use App\Http\Controllers\Sku_ValuesController;
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


//tampilan index
Route::get('/', [ProductController::class, 'index']);
//crud product
Route::get('/create_product', [ProductController::class, 'create']);
Route::post('/store_product', [ProductController::class, 'store']);
Route::get('/edit_product/{id}', [ProductController::class, 'edit']);
Route::post('/update_product/{id}', [ProductController::class, 'update']);
Route::get('/destroy_product/{id}', [ProductController::class, 'destroy']);


//crud options
Route::get('/create_options', [OptionsController::class, 'create']);
Route::post('/store_option', [OptionsController::class, 'store']);
Route::get('/edit_options/{id}', [OptionsController::class, 'edit']);
Route::post('/update_option/{id}', [OptionsController::class, 'update']);
Route::get('/destroy_option/{id}', [OptionsController::class, 'destroy']);

//crud product_skus
Route::get('/create_productskus', [Product_skusController::class, 'create']);
Route::post('/store_productskus', [Product_skusController::class, 'store']);
Route::get('/edit_productskus/{id}', [Product_skusController::class, 'edit']);
Route::post('/update_productskus/{id}', [Product_skusController::class, 'update']);
Route::get('/destroy_productskus/{id}', [Product_skusController::class, 'destroy']);


//Crud Sku Values
Route::get('/create_skuvalues', [Sku_ValuesController::class, 'create']);
Route::post('/store_skuvalues', [Sku_ValuesController::class, 'store']);
Route::get('/edit_skuvalues/{id}', [Sku_ValuesController::class, 'edit']);
Route::post('/update_skuvalues/{id}', [Sku_ValuesController::class, 'update']);
Route::get('/destroy_skuvalues/{id}', [Sku_ValuesController::class, 'destroy']);

//Crud Option Values
Route::get('/create_optionvalues', [OptionValuesController::class, 'create']);
Route::post('/store_optionvalues', [OptionValuesController::class, 'store']);
Route::get('/edit_optionvalues/{id}', [OptionValuesController::class, 'edit']);
Route::post('/update_optionvalues/{id}', [OptionValuesController::class, 'update']);
Route::get('/destroy_optionvalues/{id}', [OptionValuesController::class, 'destroy']);
